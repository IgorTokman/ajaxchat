<?php

//formalization the page

require_once 'load.php';

if(!isset($_SESSION['auth']))
    header("Location:" . "authorization.php");

$user = new User();

extract($user->fetchUser($_SESSION['user_id']));

