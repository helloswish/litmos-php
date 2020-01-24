<?php

namespace Litmos;

use craft\gql\types\DateTime;

class Course
{

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var bool
     */
    private $complete;

    /**
     * @var string
     */
    private $percentage;

    /**
     * @var DateTime
     */
    public $startDate;

    /**
     * @var string
     */
    private $linkId;

    /**
     * @param string $course_id
     * @param string $course_code
     * @param string $course_name
     * @param bool   $course_active
     * @param bool   $course_complete
     * @param string $course_percentage
     * @param DateTime $course_startDate
     * @param string $course_linkId
     */
    public function __construct($course_id, $course_code, $course_name, $course_active, $course_complete, $course_percentage, $course_startDate, $course_linkId)
    {
        $this->id     = $course_id;
        $this->code   = $course_code;
        $this->name   = $course_name;
        $this->active = $course_active;
        $this->complete = $course_complete;
        $this->percentage = $course_percentage;
        $this->startDate = $course_startDate;
        $this->linkId  = $course_linkId;
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function getComplete()
    {
        return $this->complete;
    }
    /**
     * @return string
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * @return dateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return string
     */
    public function getLinkId()
    {
        return $this->linkId;
    }
}
