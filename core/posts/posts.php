<?php

class Posts
{
    public $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getLast($limit, $order)
    {
        $data = $this->db->select("select distinct posts.*,users.username from posts join users on posts.user_id = users.id $order LIMIT $limit");
        return $data;
    }
    public function newPost($title, $descr, $user_id, $category)
    {
        $this->db->callDbQuery("insert into posts (title, descr, user_id, category) values ('$title', '$descr', '$user_id', '$category')");
    }
    public function editPost($id, $newTitle, $newDescr, $newCategory)
    {
        $this->db->callDbQuery("Update posts set title=\"$newTitle\", descr=\"$newDescr\", category=\"$newCategory\" where id=\"$id\"");
    }
    public function getPostById($id)
    {
        $data = $this->db->select("select * from posts left join users on posts.user_id = users.id where posts.id=$id");
        return $data;
    }
    public function getPostsByCategory($category)
    {
        $categories = $this->db->select("select * from posts where category='$category'");
        return $categories;
    }
    public function removePost($id)
    {
        $this->db->callDbQuery("delete from posts where id=\"$id\"");
    }
}