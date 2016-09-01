<?php
include "includes/header.php";
include "core/posts/categories.php";
$categories = new Categories($db);
if(isset($_POST['create']))
{
    $categories->addCategory($_POST['category']);
    echo "<h1>Successfully created category!</h1>";
} else {
    echo "<form method=\"post\" action=\"#\">
    Category name: <br/><input type=\"text\" name=\"category\"><p/>";
    echo "<input type=\"submit\" name=\"create\" value=\"create\"></form>";
}
include "includes/footer.php";
?>