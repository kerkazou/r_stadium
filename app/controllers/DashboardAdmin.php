<?php

class DashboardAdmin extends Controller {

  public function __construct() {
    $this->stadiumModel = $this->model('Stadium');
    $this->bookenModel = $this->model('Booken');
  }

  public function index(){
    if(isset($_SESSION['user_id']) && ($_SESSION['role'] == 2) && !(time() - $_SESSION['time'] > 60*60)){
      $numberstadiums = $this->stadiumModel->numberStadiumUser();
      $numberbookens = $this->bookenModel->numberBookensUser();
      $data = [
          'numberstadiums' => $numberstadiums,
          'numberbookens' => $numberbookens,
      ];
      $this->view('dashboardsAdmin/index' , $data);
    }else{
      redirect('');
    }
  }

}