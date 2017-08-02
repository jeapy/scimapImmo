<?php

namespace Scimap\Repository;

use Doctrine\DBAL\Connection;
use Scimap\Entity\Souscrire;

/**
 * Souscrire repository
 */
class SouscrireRepository implements RepositoryInterface
{
    /**
     * @var \Doctrine\DBAL\Connection
     */
    protected $db;


    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * Saves the Souscrire to the database.
     *
     * @param \Scimap\Entity\Souscrire $souscrire
     */
    public function save($souscrire)
    {
        $souscrireData = array(

                 'firstname' => $souscrire->getFirstname(),   
                 'lastname' => $souscrire->getLastname(),       
                 'born' =>   $souscrire->getBorn(),     
                'job' =>  $souscrire->getJob(),   
                 'adress' => $souscrire->getAdress(),
                 'mail' => $souscrire->getMail(),
                 'phone' => $souscrire->getPhone(),
                 'home' => $souscrire->getHome(),
                 'identity' => $souscrire->getIdentity(),
                 'number' => $souscrire->getNumber(),
                'validity' =>   $souscrire->getValidity(),
                 'deliverby' => $souscrire->getDeliverby(),
                
        );

        if ($souscrire->getId()) {
            $this->db->update('souscrire', $souscrireData, array('id' => $souscrire->getId()));
        } else {
            // The Souscrire is new, note the creation timestamp.
            $souscrireData['createAt'] = time();
         
           
            $this->db->insert('souscrire', $souscrireData);
            // Get the id of the newly created Souscrire and set it on the entity.
            $id = $this->db->lastInsertId();
            $souscrire->setId($id);
        }
    }

    /**
     * Deletes the Souscrire.
     *
     * @param integer $id
     */
    public function delete($id)
    {
        return $this->db->delete('souscrire', array('id' => $id));
    }

    /**
     * Returns the total number of Souscrires.
     *
     * @return integer The total number of Souscrires.
     */
    public function getCount() {
        return $this->db->fetchColumn('SELECT COUNT(id) FROM souscrire');
    }

    /**
     * Returns a Souscrire matching the supplied id.
     *
     * @param integer $id
     *
     * @return \Scimap\Entity\Souscrire|false An entity object if found, false otherwise.
     */
    public function find($id)
    {
        $souscrireData = $this->db->fetchAssoc('SELECT * FROM souscrire WHERE id = ?', array($id));
        return $souscrireData ? $this->buildSouscrire($souscrireData) : FALSE;
    }

    /**
     * Returns a collection of Souscrires.
     *
     * @param integer $limit
     *   The number of Souscrires to return.
     * @param integer $offset
     *   The number of Souscrires to skip.
     * @param array $orderBy
     *   Optionally, the order by info, in the $column => $direction format.
     *
     * @return array A collection of Souscrires, keyed by Souscrire id.
     */
    public function findAll($limit, $offset = 0, $orderBy = array())
    {
        return $this->getSouscrires(array(), $limit, $offset);
    }

    /**
     * Returns a collection of published Souscrires for the given artist id.
     *
     * @param $subscriberId
     *   The souscrire id.
     * @param integer $limit
     *   The number of Souscrires to return.
     * @param integer $offset
     *   The number of Souscrires to skip.
     * @param array $orderBy
     *   Optionally, the order by info, in the $column => $direction format.
     *
     * @return array A collection of Souscrires, keyed by Souscrire id.
     */
    public function findAllBySubscriber($subscriberId, $limit, $offset = 0, $orderBy = array())
    {
        $conditions = array(
            'souscrire_id' => $subscriberId,
            
        );
        return $this->getSouscrires($conditions, $limit, $offset);
    }

    /**
     * Returns a collection of Souscrires for the given conditions.
     *
     * @param integer $limit
     *   The number of Souscrires to return.
     * @param integer $offset
     *   The number of Souscrires to skip.
     * @param array $orderBy
     *   Optionally, the order by info, in the $column => $direction format.
     *
     * @return array A collection of Souscrires, keyed by Souscrire id.
     */
    protected function getSouscrires(array $conditions, $limit, $offset, $orderBy = array())
    {
        // Provide a default orderBy.
        if (!$orderBy) {
            $orderBy = array('createAt' => 'DESC');
        }

        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder
            ->select('c.*')
            ->from('souscrire', 'c')
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
        $souscriresData = $statement->fetchAll();

        $souscrires = array();
        foreach ($souscriresData as $souscrireData) {
            $souscrireId = $souscrireData['id'];
            $souscrires[$souscrireId] = $this->buildSouscrire($souscrireData);
        }
        return $souscrires;
    }

    /**
     * Instantiates a Souscrire entity and sets its properties using db data.
     *
     * @param array $souscrireData
     *   The array of db data.
     *
     * @return \Scimap\Entity\Souscrire
     */
    protected function buildSouscrire($souscrireData)
    {
        // Load the related subscriber and user.
        
$souscrire = new Souscrire();
$souscrire->setId($souscrireData['id']);

$souscrire->setFirstname($souscrireData['firstname'] ) ;  
$souscrire->setLastname($souscrireData['lastname']);

$born = new \DateTime('@' . $souscrireData['born']);
$souscrire->setBorn($born);

$souscrire->setJob($souscrireData['job']);
$souscrire->setAdress($souscrireData['adress']);
$souscrire->setMail($souscrireData['mail']);
$souscrire->setPhone($souscrireData['phone']);
$souscrire->setHome($souscrireData['home']);
$souscrire->setIdentity($souscrireData['identity']);
$souscrire->setNumber($souscrireData['number']);

$validity = new \DateTime('@' . $souscrireData['validity']);
$souscrire->setValidity($validity);


$createdAt = new \DateTime('@' . $souscrireData['createAt']);
$souscrire->setCreateAt($createdAt);
    
    return $souscrire;
    }
}
