<?php
session_start();
include 'auth/login.php';
include 'auth/userTemplate.php';

if(isset($_POST['submit']))
{
    $login = new Login();
    $user = $login->findUser($_POST['username']);
    if(!empty($user))
    {
        $_SESSION['logged_in'] = new User($userp[0]['id'], $user[0]['username'], $user[0]['email']);
        header("location: success.php");
    }
    else 
    {
        echo sendNotification("error", "Wrong username or password");
    }
}