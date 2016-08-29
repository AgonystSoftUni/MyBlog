<?php
include "includes/header.php";
include_once "core/posts/categories.php";
$categories = new Categories();
    if(!isset($_GET['category']))
    {
        echo "<div id=\"categories\"><ul>";
            foreach($categories->getAll() as $category)
            {
                echo "<li><a href=\"categories.php?category=".$category['category']."\">".$category['category'] . "</a></li>";
            }
        echo "</ul></div>";
    }  
    else
    {
        $postsByCategory = $posts->getPostsByCategory($_GET['category']);
        echo "<table>";
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']->privilegies == 1)
        {
            foreach($postsByCategory as $post)
            {
                echo "<tr><td><a href=\"post.php?id=".$post['id']."\">".$post['title']."</a></td><td><a href=\"editPost.php?id=".$post['id']."\">edit</a></td><td><a href=\"deletePost.php?id=".$post['id']."\">delete</a></td></tr>";
            }
        }
        else
        {
            foreach($postsByCategory as $post)
            {
                echo "<tr><td><a href=\"post.php?id=".$post['id']."\">".$post['title']."</a></td><td>".$post['date']."</td></tr>";
            }
        }
        echo "</table>";
    }
include "includes/footer.php";
?>
