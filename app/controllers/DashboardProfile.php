<?php

class DashboardProfile extends Controller {

  public function index(){
    if(isset($_SESSION['user_id']) && ($_SESSION['role'] == 2) && !(time() - $_SESSION['time'] > 60)){
      $this->view('dashboardProfile/index');
    }else{
      redirect('');
    }
  }

}