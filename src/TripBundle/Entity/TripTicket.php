<?php

namespace TripBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TripTicket
 *
 * @ORM\Table(name="trip_ticket")
 * @ORM\Entity(repositoryClass="TripBundle\Repository\TripTicketRepository")
 */
class TripTicket
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
     * @ORM\Column(name="tripID", type="integer")
     */
    private $tripID;

    /**
     * @var string
     *
     * @ORM\Column(name="ticketRef", type="string", length=255)
     */
    private $ticketRef;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valid", type="boolean")
     */
    private $valid;
    
    /**
     * @var string
     *
     * @ORM\Column(name="passenger", type="string", length=255)
     */
    private $passenger;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;


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
     * Set tripID
     *
     * @param int $tripID
     *
     * @return TripTicket
     */
    public function setTripID($tripID)
    {
        $this->tripID = $tripID;

        return $this;
    }

    /**
     * Get tripID
     *
     * @return int
     */
    public function getTripID()
    {
        return $this->tripID;
    }

    /**
     * Set ticketRef
     *
     * @param string $ticketRef
     *
     * @return TripTicket
     */
    public function setTicketRef($ticketRef)
    {
        $this->ticketRef = $ticketRef;

        return $this;
    }

    /**
     * Get ticketRef
     *
     * @return string
     */
    public function getTicketRef()
    {
        return $this->ticketRef;
    }

    /**
     * Set passenger
     *
     * @param string $passenger
     *
     * @return TripTicket
     */
    public function setPassenger($passenger)
    {
        $this->passenger = $passenger;

        return $this;
    }

    /**
     * Get passenger
     *
     * @return string
     */
    public function getPassenger()
    {
        return $this->passenger;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return TripTicket
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
     * Set valid
     *
     * @param boolean $valid
     *
     * @return TripTicket
     */
    public function setValid($valid)
    {
        $this->valid= $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return boolean
     */
    public function getValid()
    {
        return $this->valid;
    }
}

