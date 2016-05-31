<?php

namespace BusRouteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BusRoute
 *
 * @ORM\Table(name="bus_route")
 * @ORM\Entity(repositoryClass="BusRouteBundle\Repository\BusRouteRepository")
 */
class BusRoute
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
     * @ORM\Column(name="routeName", type="string", length=255)
     */
    private $routeName;

    /**
     * @var string
     *
     * @ORM\Column(name="departureLocation", type="string", length=255)
     */
    private $departureLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255)
     */
    private $destination;
    

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
     * Set routeName
     *
     * @param string $routeName
     *
     * @return BusRoute
     */
    public function setRouteName($routeName)
    {
        $this->routeName = $routeName;

        return $this;
    }

    /**
     * Get routeName
     *
     * @return string
     */
    public function getRouteName()
    {
        return $this->routeName;
    }

    /**
     * Set departureLocation
     *
     * @param string $departureLocation
     *
     * @return BusRoute
     */
    public function setDepartureLocation($departureLocation)
    {
        $this->departureLocation = $departureLocation;

        return $this;
    }

    /**
     * Get departureLocation
     *
     * @return string
     */
    public function getDepartureLocation()
    {
        return $this->departureLocation;
    }

    /**
     * Set destination
     *
     * @param string $destination
     *
     * @return BusRoute
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }
    
    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return BusRoute
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
     * @return BusRoute
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

