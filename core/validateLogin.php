<?php
include 'auth/login.php';

    if(isset($_POST['submit']))
    {
        $login = new Login();
        $user = $login->findUser($_POST['username']);
        if(!empty($user))
        {
                $_SESSION['logged_in'] = new User($user[0]['id'], $user[0]['username'], $user[0]['email'], $user[0]['privilegies']);
        }
        else 
        {
            echo sendNotification("error", "Wrong username or password");
        }
    }

