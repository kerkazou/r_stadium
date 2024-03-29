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

    public function searchUser($data){
        $this->db->query('SELECT * FROM `user` WHERE user.first_name LIKE \'%'.$data['search_username'].'%\'');
        $result = $this->db->resultSet();
        return $result;
    }

    public function signup($data){
        $this->db->query('INSERT INTO `user` (first_name, last_name, email, phone, password, role) VALUES (:first_name, :last_name, :email, :phone, :password, :role)');
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

    public function userExists($data){
        $this->db->query('SELECT * FROM `user` WHERE email = :email');
        $this->db->bind(':email', $data['email']);

        $row = $this->db->single();
        if($row){
            return true;
        }else{
            return false;
        }
    }
    
    
    public function signin($data){
        $this->db->query('SELECT * FROM `user` WHERE email = :email AND password = :password');
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', md5($data['password']));

        $row = $this->db->single();
        if($row){
            return $row;
        }else{
            return false;
        }
    }

    public function numberUser(){
        $this->getUsers();
        $result = $this->db->rowCount();
        return $result;
    }
    
    public function statusUser($data){
        if($data['status'] == 1){
            $data['status'] = 1;
        }else{
            $data['status'] = 0;
        }
        $this->db->query('UPDATE `user` SET `status`=:status WHERE `id`=:id');
        $this->db->bind(':id', $data['user_id']);
        $this->db->bind(':status', $data['status']);

        $this->db->execute();
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

}