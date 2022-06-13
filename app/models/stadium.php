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
        $this->db->query('SELECT * FROM stadium INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getSelectedStadiums($data){
        
        if($data['sport'] == 0 && $data['city']== 0){
            echo json_encode($this->get('SELECT * FROM stadium INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id WHERE stadium.name LIKE \'%'.$data['name_stadium'].'%\''));
        }
        if($data['sport']!==0 && $data['city']==0){
            echo json_encode($this->get('SELECT * FROM stadium INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id  WHERE stadium.sport ='.$data['sport'].' AND stadium.name LIKE \'%'.$data['name_stadium'].'%\''));
        }
        if($data['sport']==0 && $data['city']!==0){
            echo json_encode($this->get('SELECT * FROM stadium INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id  WHERE stadium.city='.$data['city'].' AND stadium.name LIKE \'%'.$data['name_stadium'].'%\''));
        }
        if($data['sport']!==0 && $data['city']!==0){
            echo json_encode($this->get('SELECT * FROM stadium INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id  WHERE stadium.sport ='.$data['sport'].' AND stadium.city='.$data['city'].' AND stadium.name LIKE \'%'.$data['name_stadium'].'%\''));
        }
    }

    public function numberStadiums(){
        $this->getStadiums();
        $result = $this->db->rowCount();
        return $result;
    }

}