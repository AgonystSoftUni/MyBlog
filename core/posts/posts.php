<?php
include 'includes/db/query.php';
class Posts
{
    private $db;
    public function __construct()
    {
        $this->db = new Query();
    }
    public function getLast($limit)
    {
        $data = $this->db->select("select * from posts left join users on posts.user_id = users.id ORDER BY posts.id DESC LIMIT $limit ");
        return $data;
    }
    public function newPost($title, $descr, $user_id, $category)
    {
        $this->db->callDbQuery("insert into posts (title, descr, user_id, category) values ('$title', '$descr', '$user_id', '$category')");
    }
    public function editPost($id, $newDescr, $newTitle, $newCategory)
    {
        $this->db->callDbQuery("Update posts where id=$id set title=$newTitle, descr=$newDescr, category=$newCategory");
    }
    public function getPostById($id)
    {
        $data = $this->db->select("select * from posts left join users on posts.user_id = users.id where posts.id=$id");
        return $data;
    }
}