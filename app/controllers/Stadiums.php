<?php

class Stadiums extends Controller {

  public function __construct() {
    $this->stadiumModel = $this->model('Stadium');
  }

  public function index(){
    $stadiums = $this->stadiumModel->getStadiums();
    $data = [
        'stadiums' => $stadiums,
    ];
    $this->view('stadiums/index' , $data);
  }

}