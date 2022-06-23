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
        $this->db->query("SELECT  
            stadium.id as stadium_id,
            stadium.name as stadium_name,
            city.city as stadium_city,
            sport.sport as stadium_sport,
            stadium.location as stadium_location,
            stadium.description as stadium_description,
            stadium.site_web as stadium_site_web
            FROM `stadium` INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id"); 
        $result = $this->db->resultSet();
        return $result;
    }

    public function getStadiumUser(){
        $this->db->query('SELECT  
            stadium.id as stadium_id,
            stadium.name as stadium_name,
            city.city as stadium_city,
            sport.sport as stadium_sport,
            stadium.location as stadium_location,
            stadium.description as stadium_description,
            stadium.site_web as stadium_site_web
            FROM `stadium` INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id WHERE `user`='.$_SESSION['user_id'].''); 
        $result = $this->db->resultSet();
        return $result;
    }

    public function addStadium($data){
        $this->db->query('INSERT INTO `stadium` (name, user, sport, city, location, site_web, description) VALUES (:name, :user, :sport, :city, :location, :site_web, :description)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':user', $data['user']);
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
        $this->db->query('DELETE FROM `stadium` WHERE id = :id AND user=:user');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':user', $data['user']);
    
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function editStadium($data) {
        $sport = $this->getIdSport($data['sport']);
        $city = $this->getIdcity($data['city']);
        $this->db->query('UPDATE `stadium` SET `name`=:name , `sport`=:sport , `city`=:city , `location`=:location , `site_web`=:site_web , `description`=:description WHERE `id`=:id AND `user`=:user');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':user', $_SESSION['user_id']);
        $this->db->bind(':sport', $sport[0]->sport_id);
        $this->db->bind(':city', $city[0]->city_id);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':site_web', $data['site_web']);
        $this->db->bind(':description', $data['description']);

        $this->db->execute();
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getIdSport($sport){
        return $this->get('SELECT sport.id as sport_id FROM `sport` WHERE sport LIKE \'%'.$sport.'%\'');
    }
    
    public function getIdCity($city){
        return $this->get('SELECT city.id as city_id FROM `city` WHERE city LIKE \'%'.$city.'%\'');
    }

    public function getSelectedStadiums($data){
        if($data['sport'] == 0 && $data['city']== 0){
           return $this->get('SELECT 
            stadium.id as stadium_id,
            stadium.name as stadium_name,
            city.city as stadium_city,
            sport.sport as stadium_sport,
            stadium.location as stadium_location,
            stadium.description as stadium_description,
            stadium.site_web as stadium_site_web 
            FROM `stadium` INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id WHERE stadium.name LIKE \'%'.$data['name_stadium'].'%\'');
        }
        if($data['sport']!==0 && $data['city']==0){
           return $this->get('SELECT 
            stadium.id as stadium_id,
            stadium.name as stadium_name,
            city.city as stadium_city,
            sport.sport as stadium_sport,
            stadium.location as stadium_location,
            stadium.description as stadium_description,
            stadium.site_web as stadium_site_web
            FROM `stadium` INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id  WHERE stadium.sport ='.$data['sport'].' AND stadium.name LIKE \'%'.$data['name_stadium'].'%\'');
        }
        if($data['sport']==0 && $data['city']!==0){
           return $this->get('SELECT 
            stadium.id as stadium_id,
            stadium.name as stadium_name,
            city.city as stadium_city,
            sport.sport as stadium_sport,
            stadium.location as stadium_location,
            stadium.description as stadium_description,
            stadium.site_web as stadium_site_web
            FROM `stadium` INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id  WHERE stadium.city='.$data['city'].' AND stadium.name LIKE \'%'.$data['name_stadium'].'%\'');
        }
        if($data['sport']!==0 && $data['city']!==0){
           return $this->get('SELECT 
            stadium.id as stadium_id,
            stadium.name as stadium_name,
            city.city as stadium_city,
            sport.sport as stadium_sport,
            stadium.location as stadium_location,
            stadium.description as stadium_description,
            stadium.site_web as stadium_site_web
            FROM `stadium` INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id  WHERE stadium.sport ='.$data['sport'].' AND stadium.city='.$data['city'].' AND stadium.name LIKE \'%'.$data['name_stadium'].'%\'');
        }
    }

    public function numberStadiums(){
        $this->getStadiums();
        $result = $this->db->rowCount();
        return $result;
    }
    
    public function numberStadiumUser(){
        $this->getStadiumUser();
        $result = $this->db->rowCount();
        return $result;
    }

}