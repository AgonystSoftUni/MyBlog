<?php
include "includes/header.php";
include "core/posts/comment.php";
$comment = new Comments($db);
$commentForEdit = $comment->getCommentById($_GET['id']);
if(isset($_POST['edit']))
{
    if($comment->editComment($_GET['id'], $_POST['comment']))
        header("location:post.php?id=".$commentForEdit[0]['post_id']);
} else {
    echo "<form method=\"post\" action=\"#\"> ";
    echo "Description: <br/><textarea name=\"comment\">". $commentForEdit[0]['comment'] . "</textarea><p/>";
    echo "<input type=\"submit\" name=\"edit\" value=\"Update\"></form>";
}
include "includes/footer.php";
?>