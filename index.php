<?php
session_start();
include "includes/header.php";
include "core/posts/posts.php";
$posts = new Posts();
$lastFive = $posts->getLast(3);
foreach($lastFive as $post)
{
    echo "<h2>" . $post['title'] . "</h2><br/>posted by ". $post['username'] ." ".$post['date']."<p/>" . $post['descr'] . "<br/><a href=\"post.php?id=".$post['id']."\">read more</a><hr>";
}
$lastFive = $posts->getLast(5);
foreach($lastFive as $post)
{
    echo "<h4><a href=\"post.php?id=".$post['id']."\">" . $post['title'] . "</a></h4>";
}
?>

<?php
include "includes/footer.php";
?>

