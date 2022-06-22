<?php

class DashboardManager extends Controller {

  public function __construct() {
    $this->userModel = $this->model('Login');
    $this->stadiumModel = $this->model('Stadium');
    $this->bookenModel = $this->model('Booken');
    $this->contactModel = $this->model('Contact');
    $this->cityModel = $this->model('City');
    $this->sportModel = $this->model('Sport');
  }

  public function index(){
    $numberuser = $this->userModel->numberUser();
    $numberstadium = $this->stadiumModel->numberStadiums();
    $numberbooken = $this->bookenModel->numberBookens();
    $numbercontact = $this->contactModel->numberContacts();
    $citys = $this->cityModel->getCitys();
    $numbercity = $this->cityModel->numberCitys();
    $sports = $this->sportModel->getSports();
    $numbersport = $this->sportModel->numberSports();
    $data = [
      'numberuser' => $numberuser,
      'numberstadium' => $numberstadium,
      'numberbooken' => $numberbooken,
      'numbercontact' => $numbercontact,
      'citys' => $citys,
      'numbercity' => $numbercity,
      'sports' => $sports,
      'numbersport' => $numbersport
  ];
    $this->view('dashboardsManager/index' , $data);
  }

}