<?php

class DashboardStadium {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function numberStadiums(){
        $this->db->query('SELECT * FROM `stadium`');
        $result = $this->db->resultSet();
        $result = $this->db->rowCount();
        return $result;
    }

}