<aside>
<?php
 if(isset($_SESSION['admin'])) { ?>
 <ul>
 Admin Panel
 </hr>
<li><a href="login.php">Posts</a></li>
<li><a href="login.php">Users</a></li>
<li><a href="login.php">Categories</a></li>

</ul>
<?php } else {
$sidebarPosts = $posts->getLast("5");
foreach($sidebarPosts as $post)
{
    echo "<h4><a href=\"post.php?id=".$post['id']."\">" . $post['title'] . "</a></h4>";
}
}
?>
</aside>