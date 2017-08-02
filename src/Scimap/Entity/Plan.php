<?php

namespace Scimap\Entity;


class Plan
{
 	/**  id.
     *
     * @var integer
     */
    protected $id;

    /**
     *  plan.
     *
     * @var string
     */
    protected $plan;

    /**
     *  housetype.
     *
     * @var string
     */
    protected $housetype;

    /**
     *  worktype.
     *
     * @var string
     */
    protected $worktype;

    /**
     *  startmoney.
     *
     * @var string
     */
    protected $startmoney;

    /**
     *  solde.
     *
     * @var string
     */
    protected $solde;

    /**
     *  contractyear.
     *
     * @var string
     */
    protected $contractyear;

    /**
     *  contractmonth.
     *
     * @var string
     */
    protected $contractmonth;

    /**
     *  monthly.
     *
     * @var string
     */
    protected $monthly;

    /**
     * @var string
     *
     */
      private $local;

    /**
     * @var string
     *
     */
    private $area;

    /**
     * @var array
     *
     */
    private $document;

    /**
     * @var string
     *
     */
    private $buildnumber;

    /**
     * @var \Scimap\Entity\Souscrire
     *
     */
    private $souscrire;


    /**
     * When the Plan entity was created.
     *
     * @var DateTime
     */
    protected $createdAt;

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the plan..
     *
     * @return string
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Sets the plan..
     *
     * @param string $plan the plan
     *
     * @return self
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Gets the housetype..
     *
     * @return string
     */
    public function getHousetype()
    {
        return $this->housetype;
    }

    /**
     * Sets the housetype..
     *
     * @param string $housetype the housetype
     *
     * @return self
     */
    public function setHousetype($housetype)
    {
        $this->housetype = $housetype;

        return $this;
    }

    /**
     * Gets the worktype..
     *
     * @return string
     */
    public function getWorktype()
    {
        return $this->worktype;
    }

    /**
     * Sets the worktype..
     *
     * @param string $worktype the worktype
     *
     * @return self
     */
    public function setWorktype($worktype)
    {
        $this->worktype = $worktype;

        return $this;
    }

    
    /**
     * Gets the solde..
     *
     * @return string
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Sets the solde..
     *
     * @param string $solde the solde
     *
     * @return self
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Gets the contractyear..
     *
     * @return string
     */
    public function getContractyear()
    {
        return $this->contractyear;
    }

    /**
     * Sets the contractyear..
     *
     * @param string $contractyear the contractyear
     *
     * @return self
     */
    public function setContractyear($contractyear)
    {
        $this->contractyear = $contractyear;

        return $this;
    }

    /**
     * Gets the contractmonth..
     *
     * @return string
     */
    public function getContractmonth()
    {
        return $this->contractmonth;
    }

    /**
     * Sets the contractmonth..
     *
     * @param string $contractmonth the contractmonth
     *
     * @return self
     */
    public function setContractmonth($contractmonth)
    {
        $this->contractmonth = $contractmonth;

        return $this;
    }

    /**
     * Gets the monthly..
     *
     * @return string
     */
    public function getMonthly()
    {
        return $this->monthly;
    }

    /**
     * Sets the monthly..
     *
     * @param string $monthly the monthly
     *
     * @return self
     */
    public function setMonthly($monthly)
    {
        $this->monthly = $monthly;

        return $this;
    }

   

    /**
     * Gets the When the Plan entity was created..
     *
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Sets the When the Plan entity was created..
     *
     * @param DateTime $createdAt the created at
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Gets the value of local.
     *
     * @return string
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Sets the value of local.
     *
     * @param string $local the local
     *
     * @return self
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Gets the value of area.
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Sets the value of area.
     *
     * @param string $area the area
     *
     * @return self
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }


    public function getDocuments()
    {
        return array($this->getDocument());
    }
    /**
     * Gets the value of document.
     *
     * @return array
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets the value of document.
     *
     * @param array $document the document
     *
     * @return self
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Gets the value of buildnumber.
     *
     * @return string
     */
    public function getBuildnumber()
    {
        return $this->buildnumber;
    }

    /**
     * Sets the value of buildnumber.
     *
     * @param string $buildnumber the buildnumber
     *
     * @return self
     */
    public function setBuildnumber($buildnumber)
    {
        $this->buildnumber = $buildnumber;

        return $this;
    }

    /**
     * Gets the startmoney..
     *
     * @return string
     */
    public function getStartmoney()
    {
        return $this->startmoney;
    }

    /**
     * Sets the startmoney..
     *
     * @param string $startmoney the startmoney
     *
     * @return self
     */
    public function setStartmoney($startmoney)
    {
        $this->startmoney = $startmoney;

        return $this;
    }

    /**
     * Gets the value of souscrire.
     *
     * @return string
     */
    public function getSouscrire()
    {
        return $this->souscrire;
    }

    /**
     * Sets the value of souscrire.
     *
     * @param string $souscrire the souscrire
     *
     * @return self
     */
    public function setSouscrire(Souscrire $souscrire)
    {
        $this->souscrire = $souscrire;

        return $this;
    }
}





