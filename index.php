<?php
include "includes/header.php";
$indexPosts = $posts->getLast("3", "order by posts.id desc");

foreach($indexPosts as $post)
{
    echo "<h2>" . $post['title'] . "</h2><br/>posted by ". $post['username'] ." ".$post['date']." into section: <a href=\"categories.php?category=".$post['category']."\"> ".$post['category']."</a><p/><p id=\"limitText\">" . $post['descr'] . "</p><br/><a href=\"post.php?id=".$post['id']."\">read more</a><hr>";
}

include "includes/footer.php";
?>

