<aside>
<?php
 if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']->privilegies == 1) 
 { ?>
    <ul>
        <p class="center"><b>Admin Panel</b></p>
        <hr>
        <li><a href="Posts.php">Posts</a></li>
        <li><a href="users.php">Users</a></li>
        <li><a href="categories.php">Categories</a></li>
        <li><a href="comments.php">Comments</a></li>

    </ul>
<?php 
    } 
    else
    {
        $sidebarPosts = $posts->getLast("5", "order by posts.id asc");
        foreach($sidebarPosts as $post)
        {
            echo "<h4><a href=\"post.php?id=".$post['id']."\">" . $post['title'] . "</a></h4>";
        }
    }
?>
</aside>