<?php

class Signin_model{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function isNotExistUsername(){
        $username = $_POST['username'];
        $query = "SELECT COUNT(*) as jumlah, username FROM ". $this->table ." WHERE username=:username";
        $this->db->query($query);
        $this->db->bind('username', $username);
        return $this->db->single();
    }

    public function addUserData(){

        $query = "INSERT INTO " . $this->table . " VALUES ('', :username, :password)";
        $this->db->query($query);
        $this->db->bind('username', $_POST['username']);
        $this->db->bind('password', md5($_POST['password']));

        $this->db->execute();

        return $this->db->rowCount();
    }
}