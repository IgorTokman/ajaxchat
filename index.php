<?php
require_once "core/init.php";
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AjaxChat</title>
    <link href="libs/Bootstrap/styles/bootstrap.min.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <link href="libs/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" />

    <script src="libs/Bootstrap/js/jquery-1.11.1.min.js"></script>
    <script src="libs/Bootstrap/js/bootstrap.min.js"></script>
    <script src="js/common.js"></script>



    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="panel panel-primary">

    <div class="panel-heading">
        <div class="panel-title">Application AjaxChat</div>
    </div>

    <div class="panel-body">

            <div class="alert alert-success">
                <i class="fa fa-user"> <?echo "$name"," ($short_info)"?></i>
                <button class="btn btn-info pull-right">Exit</button>
            </div>

            <div class="well pull-left" id="chart_messages">
            </div>

            <div class="well pull-right" id="chart_users">
                <? foreach($user->fetchAllUsers() as $user)
                    echo "<i class='fa fa-user well-sm'> {$user["name"]}</i>";
                ?>
            </div>
    </div>

    <div class="panel-footer">

        <form class="form-group" id="message_send">
            <div class="input-group">
                <input type="text" class="form-control" name = "message" id="text_message" placeholder="Введите сообщение">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit" id="submit_btn">Send</button>
            </span>
            </div>
        </form>

    </div>
</div>

</body>
</html>