<?php

class DashboardStadium extends Controller {

  public function __construct() {
    $this->sportModel = $this->model('Sport');
    $this->cityModel = $this->model('City');
}

  public function index(){
    $sports = $this->sportModel->getSports();
    $citys = $this->cityModel->getCitys();
    $data = [
        'sports' => $sports,
        'citys' => $citys,
    ];
    $this->view('dashboardStadium/index' , $data);
  }


  public function add(){
    var_dump($_POST);
  }

}