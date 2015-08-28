<?php

namespace Test3;

class Position{

    private $title;

    public function __construct($title){
        $this->title = $title;
    }

    /**
     * @return string
     */
    function __toString()
    {
        return $this->title;
    }


}