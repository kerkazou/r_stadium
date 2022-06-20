<?php

class DashboardManager extends Controller {

  public function __construct() {
    $this->userModel = $this->model('Login');
    $this->stadiumModel = $this->model('Stadium');
    $this->bookenModel = $this->model('Booken');
    $this->contactModel = $this->model('Contact');
  }

  public function index(){
    $numberuser = $this->userModel->numberUser();
    $numberstadium = $this->stadiumModel->numberStadiums();
    $numberbooken = $this->bookenModel->numberBookens();
    $numbercontact = $this->contactModel->numberContacts();
    $data = [
      'numberuser' => $numberuser,
      'numberstadium' => $numberstadium,
      'numberbooken' => $numberbooken,
      'numbercontact' => $numbercontact
  ];
    $this->view('dashboardsManager/index' , $data);
  }

}