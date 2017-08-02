<?php

namespace Scimap\Repository;

use Doctrine\DBAL\Connection;
use Scimap\Entity\Media;

/**
 * Media repository
 */
class MediaRepository implements RepositoryInterface
{
    /**
     * @var \Doctrine\DBAL\Connection
     */
    protected $db;

  

    public function __construct(Connection $db )
    {
        $this->db = $db;
      
    }

    /**
     * Saves the media to the database.
     *
     * @param \Scimap\Entity\Media $media
     */

   public function save($media)
    {
        $mediaData = array(
            'media_type' => $media->getMediatype(),
            'description' => $media->getDescription(),
            
        );
        
        if ($media->getId()) {
            // If a new image was uploaded, make sure the filename gets set.
            $newFile = $this->handleFileUpload($media);
            if ($newFile) {
                $mediaData['media'] = $media->getMedia();
            }

            $this->db->update('medias', $mediaData, array('id' => $media->getId()));
        } else {
            // The media is new, note the creation timestamp.
            $mediaData['createAt'] = time();
          //  $mediaData['role'] = 'media';

            $this->db->insert('medias', $mediaData);
            // Get the id of the newly created media and set it on the entity.
            $id = $this->db->lastInsertId();
            $media->setId($id);

            // If a new image was uploaded, update the media with the new
            // filename.
            $newFile = $this->handleFileUpload($media);
            if ($newFile) {
                $newData = array('media' => $media->getMedia());
                $this->db->update('medias', $newData, array('id' => $id));
            }
        }
    }

    /**
     * Handles the upload of a media image.
     *
     * @param \Scimap\Entity\User $media
     *
     * @param boolean TRUE if a new media image was uploaded, FALSE otherwise.
     */
    protected function handleFileUpload($media) {
        // If a temporary file is present, move it to the correct directory
        // and set the filename on the media.
        $file = $media->getFile();
        if ($file) {
            $newFilename = $media->getId() . '.' . $file->guessExtension();
            $file->move(Scimap_PUBLIC_ROOT . '/img/medias', $newFilename);
            $media->setFile(null);
            $media->setMedia($newFilename);
            return TRUE;
        }

        return FALSE;
    }
/**
     * Deletes the medias.
     *
     * @param integer $id
     */
    public function delete($id)
    {
        return $this->db->delete('medias', array('id' => $id));
    }

    /**
     * Returns the total number of mediass.
     *
     * @return integer The total number of mediass.
     */
    public function getCount() {
        return $this->db->fetchColumn('SELECT COUNT(id) FROM medias');
    }

    /**
     * Returns a media matching the supplied id.
     *
     * @param integer $id
     *
     * @return \Scimap\Entity\Media|false An entity object if found, false otherwise.
     */
    public function find($id)
    {
        $mediaData = $this->db->fetchAssoc('SELECT * FROM medias WHERE id = ?', array($id));
        return $mediaData ? $this->buildMedia($mediaData) : FALSE;
    }

    /**
     * Returns a collection of mediass.
     *
     * @param integer $limit
     *   The number of mediass to return.
     * @param integer $offset
     *   The number of mediass to skip.
     * @param array $orderBy
     *   Optionally, the order by info, in the $column => $direction format.
     *
     * @return array A collection of mediass, keyed by medias id.
     */
    public function findAll($limit, $offset = 0, $orderBy = array())
    {
        return $this->getMedias(array(), $limit, $offset);
    }

   
    /**
     * Returns a collection of mediass for the given conditions.
     *
     * @param integer $limit
     *   The number of mediass to return.
     * @param integer $offset
     *   The number of mediass to skip.
     * @param array $orderBy
     *   Optionally, the order by info, in the $column => $direction format.
     *
     * @return array A collection of mediass, keyed by medias id.
     */
    protected function getMedias(array $conditions, $limit, $offset, $orderBy = array())
    {
        // Provide a default orderBy.
        if (!$orderBy) {
            $orderBy = array('createAt' => 'DESC');
        }

        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder
            ->select('c.*')
            ->from('medias', 'c')
            ->setMaxResults($limit)
            ->setFirstResult($offset)
            ->orderBy('c.' . key($orderBy), current($orderBy));
        $parameters = array();
        foreach ($conditions as $key => $value) {
            $parameters[':' . $key] = $value;
            $where = $queryBuilder->expr()->eq('c.' . $key, ':' . $key);
            $queryBuilder->andWhere($where);
        }
        $queryBuilder->setParameters($parameters);
        $statement = $queryBuilder->execute();
        $mediasData = $statement->fetchAll();

        $medias = array();
        foreach ($mediasData as $mediaData) {
            $mediaId = $mediaData['id'];
            $medias[$mediaId] = $this->buildMedia($mediaData);
        }
        return $medias;
    }

    /**
     * Instantiates a medias entity and sets its properties using db data.
     *
     * @param array $mediasData
     *   The array of db data.
     *
     * @return \Scimap\Entity\Medias
     */
    protected function buildMedia($mediaData)
    {
        // Load the related subscriber and media.
        
        $media = new Media();
        $media->setId($mediaData['id']);
        $media->setMediatype($mediaData['media_type']);
        $media->setMedia($mediaData['media']);
        $media->setDescription($mediaData['description']);
        $createdAt = new \DateTime('@' . $mediaData['createAt']);
        $media->setCreatedAt($createdAt);
    
    return $media;
    }
}
