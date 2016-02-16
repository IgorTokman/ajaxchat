<?php

//sending message

require_once 'load.php';

$chat = new Chat();
$chat->throwMessage(htmlentities($_POST['message']), $_SESSION['user_id']);


