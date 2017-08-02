<?php

namespace Scimap\Repository;

use Doctrine\DBAL\Connection;
use Scimap\Entity\Newsletter;

/**
 * Newsletter repository
 */
class NewsletterRepository implements RepositoryInterface
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
     * Saves the Newsletter to the database.
     *
     * @param \Scimap\Entity\Newsletter $newsletter
     */
    public function save($newsletter)
    {
        $newsletterData = array(                
                 'mail' => $newsletter->getMail(),                
        );

        if ($newsletter->getId()) {
            $this->db->update('newsletter', $newsletterData, array('id' => $newsletter->getId()));
        } else {
            // The Newsletter is new, note the creation timestamp.
            $newsletterData['createAt'] = time();
         
           
            $this->db->insert('newsletter', $newsletterData);
            // Get the id of the newly created Newsletter and set it on the entity.
            $id = $this->db->lastInsertId();
            $newsletter->setId($id);
        }
    }

    /**
     * Deletes the Newsletter.
     *
     * @param integer $id
     */
    public function delete($id)
    {
        return $this->db->delete('newsletter', array('id' => $id));
    }

    /**
     * Returns the total number of Newsletters.
     *
     * @return integer The total number of Newsletters.
     */
    public function getCount() {
        return $this->db->fetchColumn('SELECT COUNT(id) FROM newsletter');
    }

    /**
     * Returns a Newsletter matching the supplied id.
     *
     * @param integer $id
     *
     * @return \Scimap\Entity\Newsletter|false An entity object if found, false otherwise.
     */
    public function find($id)
    {
        $newsletterData = $this->db->fetchAssoc('SELECT * FROM newsletter WHERE id = ?', array($id));
        return $newsletterData ? $this->buildNewsletter($newsletterData) : FALSE;
    }

    /**
     * Returns a collection of Newsletters.
     *
     * @param integer $limit
     *   The number of Newsletters to return.
     * @param integer $offset
     *   The number of Newsletters to skip.
     * @param array $orderBy
     *   Optionally, the order by info, in the $column => $direction format.
     *
     * @return array A collection of Newsletters, keyed by Newsletter id.
     */
    public function findAll($limit, $offset = 0, $orderBy = array())
    {
        return $this->getNewsletters(array(), $limit, $offset);
    }

     public function findAllForExcell(array $conditions, $orderBy = array())
    {
        // Provide a default orderBy.
        if (!$orderBy) {
            $orderBy = array('createAt' => 'DESC');
        }

        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder
            ->select('c.id','c.mail')
            ->from('newsletter', 'c')
            ->orderBy('c.' . key($orderBy), current($orderBy));
        $parameters = array();
        foreach ($conditions as $key => $value) {
            $parameters[':' . $key] = $value;
            $where = $queryBuilder->expr()->eq('c.' . $key, ':' . $key);
            $queryBuilder->andWhere($where);
        }
        $queryBuilder->setParameters($parameters);
        $statement = $queryBuilder->execute();
        $newslettersData = $statement->fetchAll();

        return $newslettersData;
    }

    /**
     * Returns a collection of published Newsletters for the given artist id.
     *
     * @param $subscriberId
     *   The newsletter id.
     * @param integer $limit
     *   The number of Newsletters to return.
     * @param integer $offset
     *   The number of Newsletters to skip.
     * @param array $orderBy
     *   Optionally, the order by info, in the $column => $direction format.
     *
     * @return array A collection of Newsletters, keyed by Newsletter id.
     */
    public function findAllBySubscriber($subscriberId, $limit, $offset = 0, $orderBy = array())
    {
        $conditions = array(
            'newsletter_id' => $subscriberId,
            
        );
        return $this->getNewsletters($conditions, $limit, $offset);
    }

    /**
     * Returns a collection of Newsletters for the given conditions.
     *
     * @param integer $limit
     *   The number of Newsletters to return.
     * @param integer $offset
     *   The number of Newsletters to skip.
     * @param array $orderBy
     *   Optionally, the order by info, in the $column => $direction format.
     *
     * @return array A collection of Newsletters, keyed by Newsletter id.
     */
    protected function getNewsletters(array $conditions, $limit, $offset, $orderBy = array())
    {
        // Provide a default orderBy.
        if (!$orderBy) {
            $orderBy = array('createAt' => 'DESC');
        }

        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder
            ->select('c.*')
            ->from('newsletter', 'c')
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
        $newslettersData = $statement->fetchAll();

        $newsletters = array();
        foreach ($newslettersData as $newsletterData) {
            $newsletterId = $newsletterData['id'];
            $newsletters[$newsletterId] = $this->buildNewsletter($newsletterData);
        }
        return $newsletters;
    }

    /**
     * Instantiates a Newsletter entity and sets its properties using db data.
     *
     * @param array $newsletterData
     *   The array of db data.
     *
     * @return \Scimap\Entity\Newsletter
     */
    protected function buildNewsletter($newsletterData)
    {
        // Load the related subscriber and user.
        
        $newsletter = new Newsletter();
        $newsletter->setId($newsletterData['id']);
        $newsletter->setMail($newsletterData['mail']);
        $createdAt = new \DateTime('@' . $newsletterData['createAt']);
        $newsletter->setCreateAt($createdAt);
    
    return $newsletter;
    }
}
