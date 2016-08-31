<?php
include "includes/header.php";
include "core/posts/comment.php";
$comments = new Comments($db);
if(isset($_POST['comment']))
{
        $comments->insertCommentForPostId($_GET['id'], $_POST['commentText'], $_SESSION['logged_in']->username);
        header("location: post.php?id=".$_GET['id']);
}
    $post = $posts->getPostById($_GET['id']);
    echo "<article><h1>" . $post[0]['title'] . "</h1>";
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']->privilegies == 1)
    {
        echo "<a href=\"editPost.php?id=".$post[0]['id']."\">edit</a>";
    }
    echo "<br/>posted by " .$post[0]['username']." " .$post[0]['date']. "<p>" . $post[0]['descr'] . "</p></article>";
?>
    <hr><p id="comments"> Comments </p><hr>
<?php 
if(isset($_SESSION['logged_in']))
{ 
    echo '<form action="#" method="post">
    <textarea name="commentText" required></textarea><p/>
    <input type="submit" name="comment" value="Submit Comment">
    </form><hr>';
}
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']->privilegies == 1)
{
    foreach($comments->getCommentsByPostId($_GET['id']) as $comment)
    {
        echo "<div class=\"commentWrapper\"><b>".$comment['username'] . " says:</b><br/><span class=\"comment\">" . $comment['comment'] . "<span><br/><a href=\"editComment.php?id=".$comment['id']."\">edit</a><p/></div>";
    }
}
else
{
    foreach($comments->getCommentsByPostId($_GET['id']) as $comment)
    {
        echo "<div class=\"commentWrapper\"><b>".$comment['username'] . " says:</b><br/><span class=\"comment\">" . $comment['comment'] . "</div><p/>";
    }
}

include "includes/footer.php";
?>


