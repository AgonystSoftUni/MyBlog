<?php
    include 'core/auth/userTemplate.php';
    session_start();
    include 'core/services/notification.php';
    include_once "includes/db/query.php";
    include_once "core/posts/posts.php";
    $db = new Query();
    $posts = new Posts($db);
?>
<html>
<head>
<title>JoroNe SoftUni Project</title>
<link rel="stylesheet" href="includes/css/global.css">
<head>
<body>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="categories.php">Categories</a></li>
<div id="right">
<?php if(!isset($_SESSION['logged_in']) && !isset($_SESSION['admin'])) { ?>
<li><a href="login.php">Login</a></li>
<li><a href="register.php">Register</a></li>
<?php } else { ?>
<li><a href="logout.php">Logout</a></li>
<?php } ?>
</div>
</ul>
</nav>
<div id="contentWrapper">
<?php
include "includes/sidebar.php";
?>
<main>