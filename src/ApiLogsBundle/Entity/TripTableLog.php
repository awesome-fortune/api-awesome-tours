<?php

namespace ApiLogsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TripTableLog
 *
 * @ORM\Table(name="trip_table_log")
 * @ORM\Entity(repositoryClass="ApiLogsBundle\Repository\TripTableLogRepository")
 */
class TripTableLog
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
     * @ORM\Column(name="action", type="string", length=255)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="clientIP", type="string", length=15)
     */
    private $clientIP;

    /**
     * @var string
     *
     * @ORM\Column(name="created", type="string", length=255)
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
     * Set action
     *
     * @param string $action
     *
     * @return TripTableLog
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return TripTableLog
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set clientIP
     *
     * @param string $clientIP
     *
     * @return TripTableLog
     */
    public function setClientIP($clientIP)
    {
        $this->clientIP = $clientIP;

        return $this;
    }

    /**
     * Get clientIP
     *
     * @return string
     */
    public function getClientIP()
    {
        return $this->clientIP;
    }

    /**
     * Set created
     *
     * @param string $created
     *
     * @return TripTableLog
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }
}

