<?php

namespace Scimap\Entity;


class Souscrire
{
    /**
     *  id.
     *
     * @var integer
     */
    protected $id;

    /**
     *  firstname.
     *
     * @var string
     */
    protected $firstname;

    /**
     * lastname.
     *
     * @var string
     */
    protected $lastname;

    /**
     *  born.
     *
     * @var DateTime
     */
    protected $born;

    /**
     *  job.
     *
     * @var string
     */
    protected $job;

    /**
     * adress.
     *
     * @var string
     */
    protected $adress;

    /**
     *  mail.
     *
     * @var string
     */
    protected $mail;

    /**
     *  phone.
     *
     * @var string
     */
    protected $phone;

    /**
     *  home.
     *
     * @var string
     */
    protected $home;

    /**
     * identity.
     *
     * @var string
     */
    protected $identity;

    /**
     *  number.
     *
     * @var string
     */
    protected $number;

    /**
     *  validity.
     *
     * @var DateTime
     */
    protected $validity;

    /**
     *  deliverby.
     *
     * @var string
     */
    protected $deliverby;

    
    
    
    /**
     * When the Souscrire entity was created.
     *
     * @var DateTime
     */
    protected $createAt;


     /**
     * plan.
     *
     * @var array
     */
    protected $plan;
 


    
    /**
     * Gets the id..
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id..
     *
     * @param integer $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the firstname..
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Sets the firstname..
     *
     * @param string $firstname the firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Gets the lastname..
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Sets the lastname..
     *
     * @param string $lastname the lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Gets the born..
     *
     * @return DateTime
     */
    public function getBorn()
    {
        return $this->born;
    }

    /**
     * Sets the born..
     *
     * @param DateTime $born the born
     *
     * @return self
     */
    public function setBorn($born)
    {
        $this->born = $born;

        return $this;
    }

    /**
     * Gets the job..
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Sets the job..
     *
     * @param string $job the job
     *
     * @return self
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Gets the adress..
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Sets the adress..
     *
     * @param string $adress the adress
     *
     * @return self
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Gets the mail..
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Sets the mail..
     *
     * @param string $mail the mail
     *
     * @return self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Gets the phone..
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the phone..
     *
     * @param string $phone the phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Gets the home..
     *
     * @return string
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Sets the home..
     *
     * @param string $home the home
     *
     * @return self
     */
    public function setHome($home)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * Gets the identity..
     *
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Sets the identity..
     *
     * @param string $identity the identity
     *
     * @return self
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;

        return $this;
    }

    /**
     * Gets the number..
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets the number..
     *
     * @param string $number the number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets the validity..
     *
     * @return DateTime
     */
    public function getValidity()
    {
        return $this->validity;
    }

    /**
     * Sets the validity..
     *
     * @param DateTime $validity the validity
     *
     * @return self
     */
    public function setValidity($validity)
    {
        $this->validity = $validity;

        return $this;
    }

    /**
     * Gets the deliverby..
     *
     * @return string
     */
    public function getDeliverby()
    {
        return $this->deliverby;
    }

    /**
     * Sets the deliverby..
     *
     * @param string $deliverby the deliverby
     *
     * @return self
     */
    public function setDeliverby($deliverby)
    {
        $this->deliverby = $deliverby;

        return $this;
    }

    
    

    

    /**
     * Gets the When the Souscrire entity was created..
     *
     * @return DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Sets the When the Souscrire entity was created..
     *
     * @param DateTime $createdAt the created at
     *
     * @return self
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

   

    /**
     * Gets the plan..
     *
     * @return array
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Sets the plan..
     *
     * @param array $plan the plan
     *
     * @return self
     */
    public function setPlan(array $plan)
    {
        $this->plan = $plan;

        return $this;
    }
}

