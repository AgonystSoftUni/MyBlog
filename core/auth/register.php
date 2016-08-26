<?php
include_once 'includes/db/query.php';
class Register 
{
    private $username,$password,$email, $db;

    public function __construct()
    {
        $this->username = $_POST['username'];
        $this->password = md5($_POST['password']);
        $this->email = $_POST['email'];
        $this->db = new Query();
    }
    public function userExists()
    {
        $user = $this->db->select("select id from users where username='$this->username'");
        if(empty($user))
        {
            return false;
        }
        else 
        {
            return true;
        }
    }
    public function userEmailExists()
    {
        $user = $this->db->select("select id from users where email='$this->email'");
        if(empty($user))
        {
            return false;
        }
        else 
        {
            return true;
        }
    }
    public function registerUser()
    {
        $this->db->callDbQuery("INSERT INTO `users` (username, password, email) VALUES ('$this->username', '$this->password', '$this->email')");
    }
}