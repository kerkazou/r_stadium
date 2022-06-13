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
        if($data['sport']==0 && $data['city']==0 && empty($data['name_stadium'])){
            echo json_encode( $this->getStadiums());
        }
        elseif($data['sport']!==0 && $data['city']!==0 && !empty($data['name_stadium']) ){
    //         $sql = "SELECT"

    // . "    *"

    // . "FROM"

    // . "    stadium"

    // . "INNER JOIN sport ON stadium.sport = sport.id\n"

    // . "INNER JOIN city ON stadium.city = city.id\n"

    // . "WHERE\n"

    // . "    stadium.sport = 1 \n"

    // . "    AND stadium.city = 55\n"

    // . "    AND stadium.name LIKE  \'%a\';";
            echo json_encode($this->get('SELECT * FROM stadium INNER JOIN sport ON stadium.sport=sport.id INNER JOIN city ON stadium.city=city.id  WHERE stadium.sport ='.$data['sport'].' AND stadium.city='.$data['city'].' AND stadium.name LIKE \'%'.$data['name_stadium'].'%\''));
        }
    }

    public function numberStadiums(){
        $this->getStadiums();
        $result = $this->db->rowCount();
        return $result;
    }

}