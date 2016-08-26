<?php

function sendNotification($type, $message)
{
    switch($type)
    {
        case "error":
            return "error <br/>". $message;
            break;
        case "success":
            return "success <br/>" . $message;
            break;
        default:
            return "asd";
            break;
    }
}