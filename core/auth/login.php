<?php

include_once 'includes/db/query.php';

class Login
{
    private $db, $username, $password;
    public function __construct()
    {
        $this->username = $_POST['username'];
        $this->password = md5($_POST['password']);
        $this->db = new Query();
    }
    public function findUser($username)
    {
        return $this->db->select("select id,username,email from users where username='$this->username'");
    }
}