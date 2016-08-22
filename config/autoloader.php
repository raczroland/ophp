<?php

spl_autoload_register(function($class_name) {

    $path = __DIR__ . '/../' . $class_name . '.php';
    if (file_exists($path)) {
        require_once $path;
        return true;
    }

    return false;

});