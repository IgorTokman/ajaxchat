<?php

require_once 'load.php';

echo $_POST['message'];
$chat = new Chat();
$chat->throwMessage($_POST['message'],$_SESSION['user_id']);
