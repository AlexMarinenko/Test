<?php

namespace Test1;

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 28.08.15
 * Time: 20:29
 */
class Building
{

    public $name;
    public $flats;

    public function save(){
        echo $this;
        echo "Building::save() executed.\n";
    }

    /**
     * @Override
     * @return string
     */
    function __toString()
    {
        return "Name: " . $this->name . "; Flats: " . $this->flats . "\n";
    }


}