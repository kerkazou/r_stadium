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
        ];
        $this->view('index' , $data);
    }
    
}