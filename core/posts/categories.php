<?php
include_once 'includes/db/query.php';
class Categories
{
    private $db;
    public function __construct()
    {
        $this->db = new Query();
    }
    public function getAll()
    {
        $categories = $this->db->select("select * from categories");
        return $categories;
    }
}
