<?php

class Stadiums extends Controller {

  public function __construct() {
    $this->stadiumModel = $this->model('Stadium');
  }

  public function index(){
    if(isset($_SESSION['user_id']) && ($_SESSION['role'] == 1) && !(time() - $_SESSION['time'] > 60)) {
      $stadiums = $this->stadiumModel->getStadiums();
      $data = [
          'stadiums' => $stadiums,
      ];
      $this->view('stadiums/index' , $data);
    }else{
      redirect('logins/logout');      
    }
  }

}