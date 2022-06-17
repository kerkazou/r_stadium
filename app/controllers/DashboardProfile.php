<?php

class DashboardProfile extends Controller {

  public function index(){
    if(isset($_SESSION['user_id']) && ($_SESSION['role'] == 2)){
      $this->view('dashboardProfile/index');
    }else{
      redirect('');
    }
  }

}