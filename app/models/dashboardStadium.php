<?php

class DashboardStadium {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getStadiums(){
        $this->db->query('SELECT * FROM `stadium`');
        $result = $this->db->resultSet();
        return $result;
    }

    public function numberStadiums(){
        $result = $this->getStadiums();
        $result = $this->db->rowCount();
        return $result;
    }

    // public function addStadiums($data){
    //     $this->db->query('INSERT INTO `stadium` (name, sport, city, location, site_web, description) VALUES (:name, :sport, :city, :location, :site_web, :description)');
    //     $this->db->bind(':name', $data['name']);
    //     $this->db->bind(':sport', $data['sport']);
    //     $this->db->bind(':city', $data['city']);
    //     $this->db->bind(':location', $data['location']);
    //     $this->db->bind(':site_web', $data['site_web']);
    //     $this->db->bind(':description', $data['description']);

    //     if($this->db->execute()){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }

}