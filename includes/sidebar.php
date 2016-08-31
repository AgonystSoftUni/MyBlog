<aside>
<?php
 if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']->privilegies == 1) 
 { ?>
        <p class="center"><b>Admin Panel</b></p>
        <hr>
    <ul>
        <li><a href="categories.php">Edit posts</a></li>
        <li><a href="newPost.php">Create New Post</a></li>

    </ul>
<?php 
    } 
    else
    {
        echo "<p class=\"center\"><b>Latest Posts</b></p><hr>";
        $sidebarPosts = $posts->getLast("5", "order by posts.id asc");
        foreach($sidebarPosts as $post)
        {
            echo "<h4><a href=\"post.php?id=".$post['id']."\">" . $post['title'] . "</a></h4>";
        }
    }
?>
        <p class="center"><b>Contact Info</b></p><hr>
        <p class="center">Email: email@email.com</p>
        <p class="center">Phone: 12049329508</p>
        <p class="center">Skype: randomSkype123</p>
        <p class="center">Facebook: theBestFacebook</p>

        
        
</aside>