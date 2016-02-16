<?php

//verification auth form

require_once "load.php";

$user = new User();
foreach($user->fetchAllUsers() as $person) {
    if (($person['name'] === ucfirst(strtolower(strip_tags(trim($_POST['login']))))) &&
        ($person['password'] === md5($_POST['password'])) && ($person['active'] === 'no')) {
           $_SESSION['user_id'] = $person['id'];
           $_SESSION['auth'] = 'yes';
             echo $_SESSION['user_id'];

        //changes active status
            change_active('yes');
            return ;
    }
}
echo "wrong";
