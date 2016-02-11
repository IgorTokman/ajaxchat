<?php

function load_class($classname){
    require_once 'classes/' . $classname . '.php';
}

spl_autoload_register('load_class');

session_start();
$_SESSION['user'] = $user_id  = $_GET['user'];

$chat = new Chat();
$user = new User();
extract($user->fetchUser($user_id)[0]);//['name']);
$user->clearrows();


