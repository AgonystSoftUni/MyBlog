<?php
include "includes/header.php";
    if(!empty($_SESSION['logged_in']))
    {
        unset($_SESSION['logged_in']);
    } 
    echo "<h2 class=\"center\">Logged out, you may continue browsing the website</h2>";
include "includes/footer.php";
?>
