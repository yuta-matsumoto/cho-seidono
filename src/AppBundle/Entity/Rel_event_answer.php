<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rel_event_answer
 *
 * @ORM\Table(name="rel_event_answer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Rel_event_answerRepository")
 */
class Rel_event_answer
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
     * @ORM\Column(name="event_id", type="integer")
     */
    private $eventId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="target_date", type="datetime")
     */
    private $targetDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="join_degree", type="boolean")
     */
    private $joinDegree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_at", type="datetime")
     */
    private $createAt;


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
     * Set eventId
     *
     * @param integer $eventId
     *
     * @return Rel_event_answer
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;

        return $this;
    }

    /**
     * Get eventId
     *
     * @return int
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Rel_event_answer
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
     * Set targetDate
     *
     * @param \DateTime $targetDate
     *
     * @return Rel_event_answer
     */
    public function setTargetDate($targetDate)
    {
        $this->targetDate = $targetDate;

        return $this;
    }

    /**
     * Get targetDate
     *
     * @return \DateTime
     */
    public function getTargetDate()
    {
        return $this->targetDate;
    }

    /**
     * Set joinDegree
     *
     * @param boolean $joinDegree
     *
     * @return Rel_event_answer
     */
    public function setJoinDegree($joinDegree)
    {
        $this->joinDegree = $joinDegree;

        return $this;
    }

    /**
     * Get joinDegree
     *
     * @return bool
     */
    public function getJoinDegree()
    {
        return $this->joinDegree;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     *
     * @return Rel_event_answer
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
}

