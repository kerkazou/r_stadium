<?php

class DashboardBooken extends Controller {

  public function __construct() {
    $this->bookenModel = $this->model('Booken');
  }

  public function index(){
    $Bookens = $this->bookenModel->getBookens();
    $data = [
        'Bookens' => $Bookens,
    ];
    $this->view('dashboardBooken/index' , $data);
  }

}