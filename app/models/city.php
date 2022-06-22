<?php

class City {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCitys(){
        $this->db->query('SELECT * FROM `city`');
        $result = $this->db->resultSet();
        return $result;
    }

    public function numberCitys(){
        $this->getCitys();
        $result = $this->db->rowCount();
        return $result;
    }

}