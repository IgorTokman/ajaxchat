<?php

require_once "core/active.php";
error_reporting(E_ALL & !E_NOTICE);
$_SESSION = array();
session_destroy();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authorization</title>
    <link href="libs/Bootstrap/styles/bootstrap.min.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />

    <script src="libs/Bootstrap/js/jquery-1.11.1.min.js"></script>
    <script src="libs/Bootstrap/js/bootstrap.min.js"></script>
    <script src="js/auth.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #error{
            text-align: center;
            display: none;
            margin: 10px auto;
            width: 85%;
        }
    </style>
</head>
<body>

<div class="panel panel-primary">

    <div class="panel-heading">
        <div class="panel-title">Application AjaxChat</div>
    </div>

    <div id="error" class="alert alert-danger" role="alert">
        <strong>You have entered an incorrect login/password</strong><br/>
        Try again or go away
    </div>

    <div class="panel-body">

        <form id="auth">
            <div class="form-group">
                <label for="login">Email address</label>
                <input type="text" class="form-control" id="login" name = "login" placeholder="Enter login">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

    </div>

</div>

</body>
</html>
