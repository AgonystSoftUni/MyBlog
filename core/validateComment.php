<?php

if(isset($_POST['comment']))
{
        $comments->insertCommentForPostId($_GET['id'], $_POST['commentText'], $_SESSION['logged_in']->username);
}