<?php

//clears the table messages

$users = new User();

foreach($users->fetchAllUsers() as $user)
{
    //checks if there is active user
    if($user['active'] === 'yes')
        return ;
}
    $chat = new Chat();
    $chat->query("DELETE FROM ajaxchat.messages");