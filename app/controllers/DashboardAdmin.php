<?php

class DashboardAdmin extends Controller {

  public function __construct() {
    $this->stadiumModel = $this->model('dashboardStadium');
    $this->bookenModel = $this->model('dashboardBooken');
  }

  public function index(){
    $numberstadiums = $this->stadiumModel->numberStadiums();
    $numberbookens = $this->bookenModel->numberBookens();
    $data = [
        'numberstadiums' => $numberstadiums,
        'numberbookens' => $numberbookens,
    ];
    $this->view('dashboardsAdmin/index' , $data);
  }

}