<?php

namespace Sg\CalendarBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;
use \DateTime;

/**
 * Class EventInterface
 *
 * @package Sg\CalendarBundle\Model
 */
interface EventInterface
{
    /**
     * Get id.
     *
     * @return integer
     */
    public function getId();

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title);

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle();

    /**
     * Set allDay.
     *
     * @param boolean $allDay
     *
     * @return self
     */
    public function setAllDay($allDay);

    /**
     * Get allDay.
     *
     * @return boolean
     */
    public function getAllDay();

    /**
     * Set start.
     *
     * @param DateTime $start
     *
     * @return self
     */
    public function setStart($start);

    /**
     * Get start.
     *
     * @return DateTime
     */
    public function getStart();

    /**
     * Set end.
     *
     * @param DateTime $end
     *
     * @return self
     */
    public function setEnd($end);

    /**
     * Get end.
     *
     * @return DateTime
     */
    public function getEnd();

    /**
     * Set url.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl($url);

    /**
     * Get url.
     *
     * @return string
     */
    public function getUrl();

    /**
     * Set className.
     *
     * @param string $className
     *
     * @return self
     */
    public function setClassName($className);

    /**
     * Get className.
     *
     * @return string
     */
    public function getClassName();

    /**
     * Set editable.
     *
     * @param boolean $editable
     *
     * @return self
     */
    public function setEditable($editable);

    /**
     * Get editable.
     *
     * @return boolean
     */
    public function getEditable();

    /**
     * Set color.
     *
     * @param string $color
     *
     * @return self
     */
    public function setColor($color);

    /**
     * Get color.
     *
     * @return string
     */
    public function getColor();

    /**
     * Set bgColor.
     *
     * @param string $bgColor
     *
     * @return self
     */
    public function setBgColor($bgColor);

    /**
     * Get bgColor.
     *
     * @return string
     */
    public function getBgColor();

    /**
     * Set borderColor.
     *
     * @param string $borderColor
     *
     * @return self
     */
    public function setBorderColor($borderColor);

    /**
     * Get borderColor.
     *
     * @return string
     */
    public function getBorderColor();

    /**
     * Set textColor.
     *
     * @param string $textColor
     *
     * @return self
     */
    public function setTextColor($textColor);

    /**
     * Get textColor.
     *
     * @return string
     */
    public function getTextColor();

    /**
     * Set createdAt.
     *
     * @param DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt);

    /**
     * Get createdAt.
     *
     * @return DateTime
     */
    public function getCreatedAt();

    /**
     * Set updatedAt.
     *
     * @param DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt);

    /**
     * Get updatedAt.
     *
     * @return DateTime
     */
    public function getUpdatedAt();

    /**
     * Set createdBy.
     *
     * @param UserInterface $createdBy
     *
     * @return self
     */
    public function setCreatedBy(UserInterface $createdBy);

    /**
     * Get createdBy.
     *
     * @return UserInterface
     */
    public function getCreatedBy();

    /**
     * Set updatedBy.
     *
     * @param UserInterface $updatedBy
     *
     * @return self
     */
    public function setUpdatedBy(UserInterface $updatedBy);

    /**
     * Get updatedBy.
     *
     * @return UserInterface
     */
    public function getUpdatedBy();
}