<?php

require_once 'load.php';

$chat = new Chat();
$chat->throwMessage($_POST['message'],$_SESSION['user_id']);


