<?php
session_start();
include "includes/header.php";
include "core/posts/posts.php";
$posts = new Posts();
$indexPosts = $posts->getLast("3");
include "includes/sidebar.php";
foreach($indexPosts as $post)
{
    echo "<h2>" . $post['title'] . "</h2><br/>posted by ". $post['username'] ." ".$post['date']."<p/>" . $post['descr'] . "<br/><a href=\"post.php?id=".$post['id']."\">read more</a><hr>";
}

?>

<?php
include "includes/footer.php";
?>

