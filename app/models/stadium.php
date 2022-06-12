<?php

class Stadium {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getStadiums(){
        $this->db->query('SELECT * FROM stadium INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id');
        $result = $this->db->resultSet();
        return $result;
    }

}