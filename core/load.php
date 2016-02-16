<?php

//additional file to perform the supporting actions and functions

function load_class($classname)
{
    require_once 'classes/' . $classname . '.php';
}

//changes user active status
function change_active($active_status)
{
    if (isset($_SESSION['user_id'])) {
        $user = new User();
        $user->query("UPDATE ajaxchat.users SET active = '$active_status' WHERE id=" . $_SESSION['user_id']);
    }
}

spl_autoload_register('load_class');

session_start();