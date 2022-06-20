<?php

class Contact {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getContacts(){
        $this->db->query("SELECT * FROM contact");
        $result = $this->db->resultSet();
        return $result;
    }

    // Send Message
    public function sendMessage($data){
        $this->db->query('INSERT INTO contact (username, email, phone, message) VALUES (:username, :email, :phone, :message)');
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':message', $data['message']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function numberContacts(){
        $this->getContacts();
        $result = $this->db->rowCount();
        return $result;
    }

}