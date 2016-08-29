<?php
include 'auth/register.php';
include_once 'auth/login.php';
include_once 'auth/userTemplate.php';

if(isset($_POST['submit']))
{
    if($_POST['password'] == $_POST['repeatPassword'])
    {
                $register = new Register();
        if(!$register->userExists())
        {
            if(!$register->userEmailExists())
            {
                $register->registerUser();
                $login = new Login();
                $user = $login->findUser($_POST['username']);
                $_SESSION['logged_in'] = new User($user[0]["id"], $user[0]["username"], $user[0]["email"]);
                header("location: success.php");
            } 
            else
            {
                echo sendNotification("error", "email already exists");
            }
        }
        else
        {
            echo sendNotification("error", "user already exists");
        }
    }
    else
    { 
        echo sendNotification("error", "passwords dont match");
    }
}