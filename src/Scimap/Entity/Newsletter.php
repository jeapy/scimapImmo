<?php

namespace Scimap\Entity;


class Newsletter
{
 	/**  id.
     *
     * @var integer
     */
    protected $id;

    /**
     * Email.
     *
     * @var string
     */
    protected $mail;


    /**
     * When the Souscrire entity was created.
     *
     * @var DateTime
     */
    protected $createAt;


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
     * Gets the Email..
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Sets the Email..
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
     * @param DateTime $createAt the create at
     *
     * @return self
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }
}