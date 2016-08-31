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
}
