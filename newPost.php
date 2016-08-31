<?php
include "includes/header.php";
include "core/posts/categories.php";
$categories = new Categories($db);
if(isset($_POST['create']))
{
    $posts->newPost($_POST['title'], $_POST['descr'], $_SESSION['logged_in']->id, $_POST['category']);
    echo "<h1>Successfully created post!</h1>";
} else {
    echo "<form method=\"post\" action=\"#\">
    Title: <br/><input type=\"text\" name=\"title\"><p/>Category:<br/><select name=\"category\">";
    foreach($categories->getAll() as $category)
    {
        echo "<option value=\"".$category['category']."\">".$category['category']."</option>";
    }
    echo "</select><p/>Description: <br/><textarea name=\"descr\">". $postForEdit[0]['descr'] . "</textarea><p/>";
    echo "<input type=\"submit\" name=\"create\" value=\"create\"></form>";
}
include "includes/footer.php";
?>