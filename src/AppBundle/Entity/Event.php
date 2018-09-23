<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
 */
class Event
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
     * @ORM\Column(name="event_title", type="string", length=255)
     */
    private $eventTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="event_detail", type="string", length=255, nullable=true)
     */
    private $eventDetail;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dead_line", type="date")
     */
    private $deadLine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_at", type="datetime")
     */
    private $createAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_at", type="datetime", nullable=true)
     */
    private $updateAt;
    
    /** 
     * @var User $user 
     * @ORM\OneToOne(targetEntity="User", mappedBy="event") 
     */ 
    private $user;
    
    /** 
     * @var RelEventAnswer $relEventAnswer 
     * @ORM\OneToMany(targetEntity="Rel_event_answer", mappedBy="event") 
     */ 
    private $relEventAnswer;

    public function __construct()
    {
        $this->relEventAnswer = new ArrayCollection();
    }

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
     * Set eventTitle
     *
     * @param string $eventTitle
     *
     * @return Event
     */
    public function setEventTitle($eventTitle)
    {
        $this->eventTitle = $eventTitle;

        return $this;
    }

    /**
     * Get eventTitle
     *
     * @return string
     */
    public function getEventTitle()
    {
        return $this->eventTitle;
    }

    /**
     * Set eventDetail
     *
     * @param string $eventDetail
     *
     * @return Event
     */
    public function setEventDetail($eventDetail)
    {
        $this->eventDetail = $eventDetail;

        return $this;
    }

    /**
     * Get eventDetail
     *
     * @return string
     */
    public function getEventDetail()
    {
        return $this->eventDetail;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Event
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Event
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set deadLine
     *
     * @param \DateTime $deadLine
     *
     * @return Event
     */
    public function setDeadLine($deadLine)
    {
        $this->deadLine = $deadLine;

        return $this;
    }

    /**
     * Get deadLine
     *
     * @return \DateTime
     */
    public function getDeadLine()
    {
        return $this->deadLine;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     *
     * @return Event
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     *
     * @return Event
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }
    
     /**
     * Set User
     *
     * @param User $user
     *
     * @return User
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
    
     /**
     * Set RelEventAnswer
     *
     * @param RelEventAnswer $relEventAnswer
     *
     * @return RelEventAnswer
     */
    public function setRelEventAnswer($relEventAnswer)
    {
        $this->relEventAnswer = $relEventAnswer;

        return $this;
    }

    /**
     * Get RelEventAnswer
     *
     * @return RelEventAnswer
     */
    public function getRelEventAnswer()
    {
        return $this->relEventAnswer;
    }
    
}

