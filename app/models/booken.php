<?php

class Booken {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getBookens(){
        $this->db->query('SELECT * FROM `booken` INNER JOIN user ON booken.user=user.id INNER JOIN stadium ON booken.stadium=stadium.id');
        $result = $this->db->resultSet();
        return $result;
    }

    public function numberBookens(){
        $this->getBookens();
        $result = $this->db->rowCount();
        return $result;
    }

    public function getBookensUser(){
        $this->db->query('SELECT 
            booken.*, stadium.*, user.*
            FROM `booken`
            INNER JOIN stadium ON booken.stadium = stadium.id INNER JOIN user ON booken.user=user.id WHERE stadium.user='.$_SESSION['user_id'].'');
        $result = $this->db->resultSet();
        return $result;
    }
    
    public function numberBookensUser(){
        $this->getBookensUser();
        $result = $this->db->rowCount();
        return $result;
    }
    
    public function booken($data){
        $this->db->query('INSERT INTO `booken` (user, stadium, date, hour) VALUES (:reservateur_id, :stadium_id, :date, :hour)');
        $this->db->bind(':reservateur_id', $_SESSION['user_id']);
        $this->db->bind(':stadium_id', $data['stadium_id']);
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':hour', $data['time']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

}