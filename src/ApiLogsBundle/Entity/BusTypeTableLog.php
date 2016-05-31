<?php

namespace ApiLogsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BusTypeTableLog
 *
 * @ORM\Table(name="bus_type_table_log")
 * @ORM\Entity(repositoryClass="ApiLogsBundle\Repository\BusTypeTableLogRepository")
 */
class BusTypeTableLog
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
     * Set action
     *
     * @param string $action
     *
     * @return BusTypeTableLog
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
     * @return BusTypeTableLog
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
     * @return BusTypeTableLog
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
     * @param \DateTime $created
     *
     * @return BusTypeTableLog
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
}

