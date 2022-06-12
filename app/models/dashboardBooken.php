<?php

class DashboardBooken {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function numberBookens(){
        $this->db->query('SELECT * FROM `booken`');
        $result = $this->db->resultSet();
        $result = $this->db->rowCount();
        return $result;
    }

}