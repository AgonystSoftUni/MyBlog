<?php
include "includes/header.php";
include "core/posts/comment.php";
$comments = new Comments($db);
include "core/validateComment.php";
$post = $posts->getPostById($_GET['id']);
echo "<article><h1>" . $post[0]['title'] . "</h1><br/>posted by " .$post[0]['username']." " .$post[0]['date']. "<p>" . $post[0]['descr'] . "</p></article>";
?>
<hr><p id="comments"> Comments </p><hr>
<?php if(isset($_SESSION['logged_in']))
{ 
    echo '<form action="#" method="post">
<textarea name="commentText" rows="7" cols="80" required></textarea><p/>
<input type="submit" name="comment" value="Submit Comment">
</form><hr>';
}
foreach($comments->getCommentsByPostId($_GET['id']) as $comment)
{
    echo "<b>".$comment['username'] . " says:</b><br/><span class=\"comment\">" . $comment['comment'] . "<span><p/>";
}
include "includes/footer.php";
?>


