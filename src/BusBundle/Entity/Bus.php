<?php

namespace BusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bus
 *
 * @ORM\Table(name="bus")
 * @ORM\Entity(repositoryClass="BusBundle\Repository\BusRepository")
 */
class Bus
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="seats", type="integer")
     */
    private $seats;

    /**
     * @var string
     *
     * @ORM\Column(name="busType", type="string", length=255)
     */
    private $busType;

    /**
     * @var string
     *
     * @ORM\Column(name="busRegistration", type="string", length=255)
     */
    private $busRegistration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set seats
     *
     * @param integer $seats
     *
     * @return Bus
     */
    public function setSeats($seats)
    {
        $this->seats = $seats;

        return $this;
    }

    /**
     * Get seats
     *
     * @return int
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * Set busType
     *
     * @param string $busType
     *
     * @return Bus
     */
    public function setBusType($busType)
    {
        $this->busType = $busType;

        return $this;
    }

    /**
     * Get busType
     *
     * @return string
     */
    public function getBusType()
    {
        return $this->busType;
    }

    /**
     * Set busRegistration
     *
     * @param string $busRegistration
     *
     * @return Bus
     */
    public function setBusRegistration($busRegistration)
    {
        $this->busRegistration = $busRegistration;

        return $this;
    }

    /**
     * Get busRegistration
     *
     * @return string
     */
    public function getBusRegistration()
    {
        return $this->busRegistration;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Bus
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Bus
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}

