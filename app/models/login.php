<?php

class Login {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers(){
        $this->db->query('SELECT * FROM `user`');
        $result = $this->db->resultSet();
        return $result;
    }

    public function signup($data){
        $this->db->query('INSERT INTO user (first_name, last_name, email, phone, password, role) VALUES (:first_name, :last_name, :email, :phone, :password, :role)');
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':password', md5($data['password']));
        $this->db->bind(':role', $data['role']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

}