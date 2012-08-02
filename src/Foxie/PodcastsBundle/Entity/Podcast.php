<?php

namespace Foxie\PodcastsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foxie\PodcastsBundle\Entity\Podcast
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Podcast
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $location
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var integer $size
     *
     * @ORM\Column(name="size", type="integer")
     */
    private $size;

    /**
     * @var date $recorded
     *
     * @ORM\Column(name="recorded", type="date")
     */
    private $recorded;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set location
     *
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set size
     *
     * @param integer $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set recorded
     *
     * @param date $recorded
     */
    public function setRecorded($recorded)
    {
        $this->recorded = $recorded;
    }

    /**
     * Get recorded
     *
     * @return date 
     */
    public function getRecorded()
    {
        return $this->recorded;
    }
}