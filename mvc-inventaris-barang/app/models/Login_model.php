<?php

class Login_model{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAuth(){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $query = "SELECT COUNT(*) as jumlah, username FROM ". $this->table ." WHERE username=:username AND password=:password";
        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->single();
    }
}