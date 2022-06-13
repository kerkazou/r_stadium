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

}