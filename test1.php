<?php

use Test1\Building;

require "autoloader.php";

// New object instance
$b = new Building();

// Cast object to array
$a = (array)$b;

// Set array elements
$a['name'] = 'Main tower';
$a['flats'] = 100;

// Cast array back to object
$b = cast((object)$a, 'Test1\Building');

// Call the method
$b->save();