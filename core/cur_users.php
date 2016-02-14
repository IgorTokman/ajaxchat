<?php

require_once 'load.php';

$user = new User();

$str_res = '';

foreach($user->fetchAllUsers() as $user)
    if($user['active'] === 'yes')
        $str_res .=  "<i class='fa fa-user well-sm'> {$user["name"]}</i>";

echo $str_res;

