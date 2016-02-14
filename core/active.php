<?php

require_once "load.php";

if(isset($_SESSION['user_id']))
{
    $user = new User();
    $user->query("UPDATE ajaxchat.users SET active = 'no' WHERE id=" . $_SESSION['user_id']);
}