<?php

//messages view

require_once 'load.php';

$user = new User();
$chat = new Chat();

$results = $chat->fetchMessages();
$str_res = '';
if(!empty($results))
    foreach($results as $result)
    $str_res .= '<div class="alert alert-info">' . '<span class="label label-success">'
             . $user->fetchUser($result['user_id'])['name'] . '</span> '. $result['text'] . '</div>';

echo $str_res;