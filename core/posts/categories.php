<?php
class Categories
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getAll()
    {
        $categories = $this->db->select("select * from categories");
        return $categories;
    }
    public function addCategory($category)
    {
        $this->db->callDbQuery("insert into categories (category) value ('$category')");
    }
    public function getCategoryById($id)
    {
        $category = $this->db->select("select * from categories where id=\"$id\"");
        return $category;
    }
    public function editCategory($id, $category)
    {
        $this->db->callDbQuery("Update categories set category=\"$category\" where id=\"$id\"");
        return true;
    }
}
