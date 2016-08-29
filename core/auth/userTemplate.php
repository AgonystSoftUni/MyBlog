<?php
class User
{
    public $id, $username, $email, $user;
    public function __construct($id, $username, $email, $privilegies)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->privilegies = $privilegies;
    }
}