<?php

class Sport {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getSports(){
        $this->db->query('SELECT * FROM `sport`');
        $result = $this->db->resultSet();
        return $result;
    }

}