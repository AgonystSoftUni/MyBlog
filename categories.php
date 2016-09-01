<?php
include "includes/header.php";
include_once "core/posts/categories.php";
$categories = new Categories($db);
    if(!isset($_GET['category']))
    {
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']->privilegies == 1)
            {
            echo "<div id=\"categories\"><ul>";
                foreach($categories->getAll() as $category)
                {
                    echo "<li><a href=\"categories.php?category=".$category['category']."\">".$category['category'] . "</a><br/><a href=\"editCategory.php?id=".$category['id']."\">edit category</a></li>";
                }
            echo "</ul></div>";
            }
            else
            {
            echo "<div id=\"categories\"><ul>";
                foreach($categories->getAll() as $category)
                {
                    echo "<li><a href=\"categories.php?category=".$category['category']."\">".$category['category'] . "</a></li>";
                }
            echo "</ul></div>";
            }
    }  
    else
    {
        if(isset($_POST['delete']))
        {
            $posts->removePost($_POST['id']);
            echo "<h1>successfully deleted post !</h1>";
        }
        else
        {
            $postsByCategory = $posts->getPostsByCategory($_GET['category']);
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']->privilegies == 1)
            {
                echo "<table>";
                foreach($postsByCategory as $post)
                {
                    echo "<tr><td><a href=\"post.php?id=".$post['id']."\">".$post['title']."</a></td><td><a href=\"editPost.php?id=".$post['id']."\">edit</a></td><td><form action=\"\" method=\"post\"><input type=\"hidden\" name=\"id\" value=\"".$post['id']."\"><input type=\"submit\" name=\"delete\" value=\"delete\" onclick='return confirm(\"Are you sure you want to delete?\")'></form></td></tr>";
                }
                echo "</table>";
            }
            else
            {
                foreach($postsByCategory as $post)
                {
                    echo "<div class=\"post\"><a href=\"post.php?id=".$post['id']."\">".$post['title']."</a><br/><div class=\"description\">".$post['descr']."</div><br/>".$post['date']."</div>";
                }
            }
            }
    }
include "includes/footer.php";
?>
