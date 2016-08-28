<?php
session_start();
    if(!empty($_SESSION['logged_in']))
    {
        unset($_SESSION['logged_in']);
    } 
    if(!empty($_SESSION['admin']))
    {
        unset($_SESSION['admin']);
    }

    ?>