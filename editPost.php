<?php
include "includes/header.php";
include "core/posts/categories.php";
$categories = new Categories($db);
if(isset($_POST['edit']))
{
    $posts->editPost($_GET['id'], $_POST['title'], $_POST['descr'], $_POST['category']);
    echo "<h1>Successfully updated post!</h1><br/><a href=\"post.php?id=".$_GET['id']."\">go back to the post </a>";
} else {
$postForEdit = $posts->getPostById($_GET['id']);
    echo "<form method=\"post\" action=\"#\">
    Title: <br/><input type=\"text\" name=\"title\" value=\"". $postForEdit[0]['title'] ."\"><p/>Category:<br/><select name=\"category\">";
    foreach($categories->getAll() as $category)
    {
        echo "<option value=\"".$category['category']."\">".$category['category']."</option>";
    }
    echo "</select><p/>Description: <br/><textarea name=\"descr\">". $postForEdit[0]['descr'] . "</textarea><p/>";
    echo "<input type=\"submit\" name=\"edit\" value=\"Update\"></form>";
}
include "includes/footer.php";
?>