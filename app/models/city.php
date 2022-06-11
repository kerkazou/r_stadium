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

}