<?php

//formalization the page

require_once 'load.php';

$_SESSION['user_id']  = $_GET['user'];

$user = new User();

extract($user->fetchUser($_SESSION['user_id']));

