<?php

namespace Scimap\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class Media
{
    /**
     *  id.
     *
     * @var integer
     */
    protected $id;

    /**
     *  media.
     *
     * @var string
     */
    protected $media;

    /**
     * mediatype.
     *
     * @var string
     */
    protected $mediatype;

    /**
     *  description.
     *
     * @var string
     */
    protected $description;

   /**
     * When the artist entity was created.
     *
     * @var DateTime
     */
    protected $createdAt;
   
   /**
     * The temporary uploaded file.
     *
     * $this->image stores the filename after the file gets moved to "images/".
     *
     * @var \Symfony\Component\HttpFoundation\File\UploadedFile
     */
    protected $file;

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
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Sets the firstname..
     *
     * @param string $media the media
     *
     * @return self
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Gets the lastname..
     *
     * @return string
     */
    public function getMediatype()
    {
        return $this->mediatype;
    }

    /**
     * Sets the lastname..
     *
     * @param string $mediatype the mediatype
     *
     * @return self
     */
    public function setMediatype($mediatype)
    {
        $this->mediatype = $mediatype;

        return $this;
    }

    /**
     * Gets the born..
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the born..
     *
     * @param string $description the description
     *
     * @return self
     */
    public function setDescription( $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets the When the artist entity was created..
     *
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Sets the When the artist entity was created..
     *
     * @param DateTime $createdAt the created at
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Gets the The temporary uploaded file.
     *$this->image stores the filename after the file gets moved to "images/"..
     *
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets the The temporary uploaded file.
     *$this->image stores the filename after the file gets moved to "images/"..
     *
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $file the file
     *
     * @return self
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;

        return $this;
    }
}
