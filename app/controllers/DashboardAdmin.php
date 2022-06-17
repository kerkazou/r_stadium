<?php

class DashboardAdmin extends Controller {

  public function __construct() {
    $this->stadiumModel = $this->model('Stadium');
    $this->bookenModel = $this->model('Booken');
  }

  public function index(){
    $numberstadiums = $this->stadiumModel->numberStadiums();
    $numberbookens = $this->bookenModel->numberBookens();
    $data = [
        'numberstadiums' => $numberstadiums,
        'numberbookens' => $numberbookens,
    ];
    if(isset($_SESSION['user_id'])){
      $this->view('dashboardsAdmin/index' , $data);
    }else{
      redirect('');
    }
  }

}