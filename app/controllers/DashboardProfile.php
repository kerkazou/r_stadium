<?php

class DashboardProfile extends Controller {

  public function index(){
    if(isset($_SESSION['user_id'])){
      $this->view('dashboardProfile/index');
    }else{
      redirect('');
    }
  }

}