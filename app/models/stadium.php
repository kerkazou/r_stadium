<?php

class Stadium {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function get($sql){
        $this->db->query($sql);
        $result = $this->db->resultSet();
        return $result;
    }

    public function getStadiums(){
        $this->db->query('SELECT 
            stadium.id as stadium_id,
            stadium.name as stadium_name,
            city.city as stadium_city,
            sport.sport as stadium_sport,
            stadium.location as stadium_location,
            stadium.description as stadium_description,
            stadium.site_web as stadium_site_web
            FROM `stadium` INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id');
        $result = $this->db->resultSet();
        return $result;
    }

    public function addStadium($data){
        $this->db->query('INSERT INTO `stadium` (name, sport, city, location, site_web, description) VALUES (:name, :sport, :city, :location, :site_web, :description)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':sport', $data['sport']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':site_web', $data['site_web']);
        $this->db->bind(':description', $data['description']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function delet($data){
        $this->db->query('DELETE FROM `stadium` WHERE id = :id');
        $this->db->bind(':id', $data['id']);
    
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
      }

    public function getSelectedStadiums($data){
        
        if($data['sport'] == 0 && $data['city']== 0){
           return $this->get('SELECT * FROM `stadium` INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id WHERE stadium.name LIKE \'%'.$data['name_stadium'].'%\'');
        }
        if($data['sport']!==0 && $data['city']==0){
           return $this->get('SELECT * FROM `stadium` INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id  WHERE stadium.sport ='.$data['sport'].' AND stadium.name LIKE \'%'.$data['name_stadium'].'%\'');
        }
        if($data['sport']==0 && $data['city']!==0){
           return $this->get('SELECT * FROM `stadium` INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id  WHERE stadium.city='.$data['city'].' AND stadium.name LIKE \'%'.$data['name_stadium'].'%\'');
        }
        if($data['sport']!==0 && $data['city']!==0){
           return $this->get('SELECT * FROM `stadium` INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id  WHERE stadium.sport ='.$data['sport'].' AND stadium.city='.$data['city'].' AND stadium.name LIKE \'%'.$data['name_stadium'].'%\'');
        }
    }

    public function numberStadiums(){
        $this->getStadiums();
        $result = $this->db->rowCount();
        return $result;
    }

}