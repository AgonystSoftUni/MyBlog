<?php
include "includes/header.php";
include "core/posts/posts.php";
$posts = new Posts();
$post = $posts->getPostById($_GET['id']);
echo "<article><h1>" . $post[0]['title'] . "</h1><br/>posted by " .$post[0]['username']." " .$post[0]['date']. "<p>" . $post[0]['descr'] . "</p></article>";
include "includes/sidebar.php";
include "includes/footer.php";
?>

