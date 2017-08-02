<?php

namespace Scimap\Repository;

use Doctrine\DBAL\Connection;
use Scimap\Entity\Plan;


/**
 * Plan repository
 */
class PlanRepository implements RepositoryInterface
{
    /**
     * @var \Doctrine\DBAL\Connection
     */
    protected $db;

    /**
     * @var \Scimap\Repository\SouscrireRepository
     */
    protected $souscrireRepository;

  

    public function __construct(Connection $db , $souscrireRepository)
    {
        $this->db = $db;
        $this->souscrireRepository = $souscrireRepository;
   
    }

    /**
     * Saves the plan to the database.
     *
     * @param \Scimap\Entity\Plan $plan
     */
    public function save($plan)
    {
        $planData = array(
           'souscrire_id' => $plan->getSouscrire()->getId(),      
           'plan' =>     $plan->getPlan(),
           'housetype' => $plan->getHousetype(),
           'worktype' => $plan->getWorktype(),
           'startmoney' => $plan->getStartmoney(),
           'solde' => $plan->getSolde(),
           'contractyear' => $plan->getContractyear(),
           'contractmonth' => $plan->getContractmonth(),
           'monthly' => $plan->getMonthly(),
           'local'=>$plan->getLocal(),
           'area' =>$plan->getArea(),
           'document' =>implode(',',$plan->getDocument()),
           'buildnumber'=>$plan->getBuildnumber()          
                     
        );

        if ($plan->getId()) {
            $this->db->update('plan', $planData, array('id' => $plan->getId()));
        } else {
            // The plan is new, note the creation timestamp.
            $planData['createdAt'] = time();

            $this->db->insert('plan', $planData);
            // Get the id of the newly created plan and set it on the entity.
            $id = $this->db->lastInsertId();
            $plan->setId($id);
        }
    }

    /**
     * Deletes the plan.
     *
     * @param integer $id
     */
    public function delete($id)
    {
        return $this->db->delete('plan', array('id' => $id));
    }

    /**
     * Returns the total number of plan.
     *
     * @return integer The total number of plan.
     */
    public function getCount() {
        return $this->db->fetchColumn('SELECT COUNT(id) FROM plan');
    }

    /**
     * Returns a plan matching the supplied id.
     *
     * @param integer $id
     *
     * @return \Scimap\Entity\Plan|false An entity object if found, false otherwise.
     */
    public function find($id)
    {
        $planData = $this->db->fetchAssoc('SELECT * FROM plan WHERE id = ?', array($id));
        return $planData ? $this->buildPlan($planData) : FALSE;
    }

    /**
     * Returns a collection of plan.
     *
     * @param integer $limit
     *   The number of plan to return.
     * @param integer $offset
     *   The number of plan to skip.
     * @param array $orderBy
     *   Optionally, the order by info, in the $column => $direction format.
     *
     * @return array A collection of plan, keyed by Plan id.
     */
    public function findAll($limit, $offset = 0, $orderBy = array())
    {
        return $this->getplan(array(), $limit, $offset);
    }

    /**
     * Returns a collection of published plan for the given souscrire id.
     *
     * @param $souscrireId
     *   The souscrire id.
     * @param integer $limit
     *   The number of plan to return.
     * @param integer $offset
     *   The number of plan to skip.
     * @param array $orderBy
     *   Optionally, the order by info, in the $column => $direction format.
     *
     * @return array A collection of plan, keyed by Plan id.
     */
    public function findAllByPlan($planId, $limit, $offset = 0, $orderBy = array())
    {
        $conditions = array(
            'id' => $planId,            
        );
        return $this->getplan($conditions, $limit, $offset);
    }

    /**
     * Returns a collection of plan for the given conditions.
     *
     * @param integer $limit
     *   The number of plan to return.
     * @param integer $offset
     *   The number of plan to skip.
     * @param array $orderBy
     *   Optionally, the order by info, in the $column => $direction format.
     *
     * @return array A collection of plan, keyed by plan id.
     */
    protected function getplan(array $conditions, $limit, $offset, $orderBy = array())
    {
        // Provide a default orderBy.
        if (!$orderBy) {
            $orderBy = array('createdAt' => 'DESC');
        }

        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder
            ->select('c.*')
            ->from('plan', 'c')
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
        $plansData = $statement->fetchAll();

        $plan = array();
        foreach ($plansData as $planData) {
            $planId = $planData['id'];
            $plan[$planId] = $this->buildPlan($planData);
        }
        return $plan;
    }

    /**
     * Instantiates a plan entity and sets its properties using db data.
     *
     * @param array $planData
     *   The array of db data.
     *
     * @return \Scimap\Entity\Plan
     */
    protected function buildPlan($planData)
    {
        // Load the related souscrire and user.
        $souscrire = $this->souscrireRepository->find($planData['souscrire_id']);

    

        $plan = new Plan();
        $plan->setId($planData['id']);
        $plan->setSouscrire($souscrire);

        $plan->setPlan($planData['plan']);        
        $plan->setHousetype($planData['housetype']);
        $plan->setWorktype($planData['worktype']);
        $plan->setStartmoney($planData['startmoney']);
        $plan->setSolde($planData['solde']);
        $plan->setContractyear($planData['contractyear']);
        $plan->setContractmonth($planData['contractmonth']);
        $plan->setMonthly($planData['monthly']);

        $plan->setLocal($planData['local']);
        $plan->setArea($planData['area']);

        $plan->setDocument($planData['document']);

        $plan->setBuildnumber($planData['buildnumber']);
        
 
        $createdAt = new \DateTime('@' . $planData['createdAt']);
        $plan->setCreatedAt($createdAt);

        return $plan;
    }
}
