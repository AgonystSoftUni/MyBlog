<?php
include "includes/header.php";
$currentPostArray = $db->select("select * from posts");
echo "<table border=1>";
foreach($currentPostArray as $post)
{
    echo "<tr><td><a href=\"post.php?id=".$post['id']."\">".$post['title']."</a></td><td><a href=\"editPost.php?id=".$post['id']."\">edit</a></td><td><a href=\"deletePost.php?id=".$post['id']."\">delete</a></td></tr>";
}
echo "</table>";

include "includes/footer.php";


