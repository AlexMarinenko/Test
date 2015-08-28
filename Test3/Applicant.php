<?php

namespace Test3;

class Applicant extends Specialist{

    /**
     * Applicant constructor.
     */
    public function __construct($name, $cv, $cvDate)
    {
        parent::__construct($name, $cv, $cvDate, null, null);
    }

    /**
     * Accept an Applicant for a Position
     * @param $position
     * @param $acceptedAt
     */
    public function accept($position, $acceptedAt = null){
        $this->position = $position;
        $this->acceptedAt = $acceptedAt ?: new \DateTime();
    }

}