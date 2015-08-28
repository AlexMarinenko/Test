<?php

spl_autoload_register (function($class_name) {

    $path = str_replace("\\", DIRECTORY_SEPARATOR, $class_name) . '.php';

    if(file_exists($path) && !class_exists($class_name)){
        require_once $path;
        return;
    }
});

/**
 * Cast object http://stackoverflow.com/questions/2226103/how-to-cast-objects-in-php
 * @param $obj
 * @param $to_class
 * @return bool|mixed
 */
function cast($obj, $to_class) {
    if(class_exists($to_class)) {
        $obj_in = serialize($obj);
        $obj_out = 'O:' . strlen($to_class) . ':"' . $to_class . '":' . substr($obj_in, $obj_in[2] + 7);
        return unserialize($obj_out);
    }
    else
        return false;
}
