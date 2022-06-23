<?php

class DashboardBooken extends Controller {

  public function __construct() {
    $this->bookenModel = $this->model('Booken');
  }

  public function index(){
    if(isset($_SESSION['user_id']) && ($_SESSION['role'] == 2) && !(time() - $_SESSION['time'] > 60*60)){
      $Bookens = $this->bookenModel->getBookensUser();
      $data = [
          'Bookens' => $Bookens,
      ];
      $this->view('dashboardBooken/index' , $data);
    }else{
      redirect('');
    }
  }

}