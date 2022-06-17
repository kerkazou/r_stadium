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
    if(isset($_SESSION['user_id']) && ($_SESSION['role'] == 2)){
      $this->view('dashboardBooken/index' , $data);
    }else{
      redirect('');
    }
  }

}