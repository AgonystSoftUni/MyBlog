<?php
include "includes/header.php";
include "core/posts/categories.php";
$category = new Categories($db);
$categoryForEdit = $category->getCategoryById($_GET['id']);
if(isset($_POST['edit']))
{
    if($category->editCategory($_GET['id'], $_POST['category']))
        header("location:categories.php");
} else {
    echo "<form method=\"post\" action=\"#\"> ";
    echo "Category: <br/><textarea name=\"category\">". $categoryForEdit[0]['category'] . "</textarea><p/>";
    echo "<input type=\"submit\" name=\"edit\" value=\"Update\"></form>";
}
include "includes/footer.php";
?>