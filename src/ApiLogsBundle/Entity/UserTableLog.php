<?php

namespace ApiLogsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTableLog
 *
 * @ORM\Table(name="user_table_log")
 * @ORM\Entity(repositoryClass="ApiLogsBundle\Repository\UserTableLogRepository")
 */
class UserTableLog
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
     * @return UserTableLog
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
     * Set clientIP
     *
     * @param string $clientIP
     *
     * @return UserTableLog
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
     * @return UserTableLog
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

