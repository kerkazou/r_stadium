<?php

class DashboardStadium extends Controller {

  public function __construct() {
    $this->sportModel = $this->model('Sport');
    $this->cityModel = $this->model('City');
    $this->stadiumModel = $this->model('Stadium');
  }

  public function index(){
    $sports = $this->sportModel->getSports();
    $citys = $this->cityModel->getCitys();
    $stadiums = $this->stadiumModel->getStadiums();
    $data = [
        'stadiums' => $stadiums,
        'sports' => $sports,
        'citys' => $citys,
    ];
    $this->view('dashboardStadium/index' , $data);
  }


  public function addStadium() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
        $data = [
            'name' => trim($_POST['name']),
            'sport' => trim($_POST['sport']),
            'city' => trim($_POST['city']),
            'location' => $_POST['location'],
            'site_web' => $_POST['site_web'],
            'description' => $_POST['description'],
            'error' => ''
        ];
        if((!empty($data['name'])) && (!empty($data['sport'])) && (!empty($data['city']))){
          $addStadium = $this->stadiumModel->addStadium($data);
          if($addStadium){
            $data['error'] = 'Stadium has been added successfully.';
            redirect('dashboardStadium');
          }else if($addStadium == false){
            $data['error'] = 'Error, Please Repeat again.';
            redirect('dashboardStadium');
          }
        }
        else{
          $data['error'] = 'Error, Please Repeat again.';
          redirect('dashboardStadium');
        }
    }
    else{
        //init data
        $data = [
          'name' => '',
          'sport' => '',
          'city' => '',
          'location' => '',
          'site_web' => '',
          'description' => '',
          'error' => ''
        ];
        redirect('dashboardStadium');
    }
  }

  public function delet() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING); 
        $data = [
            'id' => $_GET['id'],
            'error' => ''
        ];
        $stadium = $this->stadiumModel->delet($data);
        if($stadium){
            redirect('dashboardStadium');
        }else if($stadium == false){
            redirect('dashboardStadium');
        }
    }
}

}