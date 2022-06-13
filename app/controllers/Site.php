<?php

class Site extends Controller{

    public function __construct() {
        $this->sportModel = $this->model('Sport');
        $this->cityModel = $this->model('City');
        $this->stadiumModel = $this->model('Stadium');
    }
    
    public function index() {
        $sports = $this->sportModel->getSports();
        $citys = $this->cityModel->getCitys();
        $stadiums = $this->stadiumModel->getStadiums();
        $data = [
            'sports' => $sports,
            'citys' => $citys,
            'stadiums' => $stadiums,
            'error' => ''
        ];
        $this->view('index' , $data);
    }

    public function ajax(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'sport' => $_POST['sport'],
                'city' => $_POST['city'],
                'name_stadium' => $_POST['name_stadium'],
                'error' => ''
            ];
            $stadiums = $this->stadiumModel->getSelectedStadiums($data);
            if($stadiums){
                return $stadiums;
            }else if($stadiums == false){
                $data['error'] = 'Reselt, note found.';
                return $data;
            }
        }
    } 
    
}