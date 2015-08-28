<?php

namespace Test3;

class Specialist{
    /**
     * Name
     * @var string
     */
    protected $name;

    /**
     * CV text
     * @var string
     */
    protected $cv;

    /**
     * The date CV received at
     * @var \DateTime
     */
    protected $cvDate;

    /**
     *
     * @var Position
     */
    protected $position;

    /**
     * The date the Applicant accepted at
     * @var \DateTime
     */
    protected $acceptedAt;

    /**
     * Specialist constructor.
     * @param string $name
     * @param string $cv
     * @param \DateTime $cvDate
     * @param Position $position
     * @param \DateTime $acceptedAt
     */
    public function __construct($name, $cv, \DateTime $cvDate, $position, $acceptedAt)
    {
        $this->name = $name;
        $this->cv = $cv;
        $this->cvDate = $cvDate;
        $this->position = $position;
        $this->acceptedAt = $acceptedAt;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * @return \DateTime
     */
    public function getCvDate()
    {
        return $this->cvDate;
    }

    /**
     * @return Position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return \DateTime
     */
    public function getAcceptedAt()
    {
        return $this->acceptedAt;
    }

    /**
     * @return string
     */
    function __toString()
    {
        return sprintf("%s: { Name:[%s], CV: [%s], CV date: [%s], Position: [%s], AcceptedAt: [%s] }",
            get_called_class(),
            $this->name,
            $this->cv,
            $this->cvDate->format("Y/m/d"),
            $this->position ?: 'null',
            $this->acceptedAt ? $this->acceptedAt->format('Y/m/d'):'null'
        );
    }


}