<?php

function load_class($classname){
require_once 'classes/' . $classname . '.php';
}

spl_autoload_register('load_class');

session_start();