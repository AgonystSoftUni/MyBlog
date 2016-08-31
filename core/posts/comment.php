<?php
include_once 'includes/db/query.php';
class Comments
{
    public $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getCommentsByPostId($id)
    {
        $comments = $this->db->select("select * from comments where post_id=\"$id\"");
        return $comments;
    }
    public function insertCommentForPostId($post_id, $comment, $username)
    {
        $this->db->callDbQuery("INSERT INTO `comments` (post_id, username, comment) VALUES ('$post_id', '$username', '$comment')");
    }
    public function getCommentById($id)
    {
        $comment = $this->db->select("select * from comments where id=\"$id\"");
        return $comment;
    }
    public function editComment($id, $comment)
    {
        $this->db->callDbQuery("update comments set comment=\"$comment\" where id=\"$id\"");
        return true;
    }
}
