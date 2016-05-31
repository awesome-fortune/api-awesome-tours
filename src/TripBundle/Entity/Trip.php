<?php

namespace TripBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trip
 *
 * @ORM\Table(name="trip")
 * @ORM\Entity(repositoryClass="TripBundle\Repository\TripRepository")
 */
class Trip
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
     * @var string
     *
     * @ORM\Column(name="tripName", type="string", length=255)
     */
    private $tripName;

    /**
     * @var int
     *
     * @ORM\Column(name="routeId", type="integer")
     */
    private $routeId;

    /**
     * @var int
     *
     * @ORM\Column(name="busID", type="integer")
     */
    private $busID;

    /**
     * @var int
     *
     * @ORM\Column(name="seatsAvailable", type="integer")
     */
    private $seatsAvailable;

    /**
     * @var int
     *
     * @ORM\Column(name="fare", type="integer")
     */
    private $fare;

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
     * Set tripName
     *
     * @param string $tripName
     *
     * @return Trip
     */
    public function setTripName($tripName)
    {
        $this->tripName = $tripName;

        return $this;
    }

    /**
     * Get tripName
     *
     * @return string
     */
    public function getTripName()
    {
        return $this->tripName;
    }

    /**
     * Set routeId
     *
     * @param integer $routeId
     *
     * @return Trip
     */
    public function setRouteId($routeId)
    {
        $this->routeId = $routeId;

        return $this;
    }

    /**
     * Get routeId
     *
     * @return int
     */
    public function getRouteId()
    {
        return $this->routeId;
    }

    /**
     * Set busID
     *
     * @param integer $busID
     *
     * @return Trip
     */
    public function setBusID($busID)
    {
        $this->busID = $busID;

        return $this;
    }

    /**
     * Get busID
     *
     * @return int
     */
    public function getBusID()
    {
        return $this->busID;
    }

    /**
     * Set seatsAvailable
     *
     * @param integer $seatsAvailable
     *
     * @return Trip
     */
    public function setSeatsAvailable($seatsAvailable)
    {
        $this->seatsAvailable = $seatsAvailable;

        return $this;
    }

    /**
     * Get seatsAvailable
     *
     * @return int
     */
    public function getSeatsAvailable()
    {
        return $this->seatsAvailable;
    }

    /**
     * Set fare
     *
     * @param integer $fare
     *
     * @return Trip
     */
    public function setFare($fare)
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * Get fare
     *
     * @return int
     */
    public function getFare()
    {
        return $this->fare;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Trip
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
     * @return Trip
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

