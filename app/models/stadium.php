<?php

class Stadium {

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

}