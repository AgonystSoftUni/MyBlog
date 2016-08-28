<?php
    include 'core/services/notification.php';
?>
<html>
<head>
<title>JoroNe SoftUni Project</title>
<head>
<body>
<nav>
<ul>
<li><a href="index.php">home</a></li>
<li><a href="blog.php">blog</a></li>
<?php if(!isset($_SESSION['logged_in'])) { ?>
<li><a href="login.php">login</a></li>
<li><a href="register.php">register</a></li>
<?php } else { ?>
<li><a href="logout.php">logout</a></li>
<?php } ?>
</ul>
</nav>