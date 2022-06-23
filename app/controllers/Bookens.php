<?php

class Bookens extends Controller {

  public function __construct() {
    $this->bookenModel = $this->model('Booken');
  }

  public function index(){
    if(isset($_SESSION['user_id']) && ($_SESSION['role'] == 1) && (time() - $_SESSION['time'] > 60)) {
      $Bookens = $this->bookenModel->getBookens();
      $data = [
          'Bookens' => $Bookens,
      ];
      redirect('logins/logout');
    }else{
      $this->view('Bookens/index' , $data);
    }
  }

}