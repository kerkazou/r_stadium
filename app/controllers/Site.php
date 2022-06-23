<?php

class Site extends Controller{

    public function __construct() {
        $this->sportModel = $this->model('Sport');
        $this->cityModel = $this->model('City');
        $this->stadiumModel = $this->model('Stadium');
        $this->bookenModel = $this->model('Booken');
    }
    
    public function index() {
        $sports = $this->sportModel->getSports();
        $citys = $this->cityModel->getCitys();
        $stadiums = $this->stadiumModel->getStadiums();
        $data = [
            'sports' => $sports,
            'citys' => $citys,
            'stadiums' => $stadiums,
            'error' => ''
        ];
        if(isset($_SESSION['user_id']) && (time() - $_SESSION['time'] > 60*60)) {
            redirect('logins/logout');
        }else{
            $this->view('index' , $data);
        }
    }

    public function ajax(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'sport' => $_POST['sport'],
                'city' => $_POST['city'],
                'name_stadium' => $_POST['name_stadium'],
                'error' => ''
            ];
            $stadiums = $this->stadiumModel->getSelectedStadiums($data);
            $response='';
            if($stadiums){
                $response= $stadiums;
            }else if($stadiums == false){
                $response= [];
            }
            echo json_encode($response);
        }
    } 

    public function booken() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'stadium_id' => $_POST['stadium_id'],
                'date' => $_POST['date'],
                'time' => $_POST['time'],
                'error' => ''
            ];
            if((!empty($data['stadium_id'])) && (!empty($data['date'])) && (!empty($data['time']))){
                if(!isset($_SESSION['user_id'])){
                    redirect('Logins');
                }
                $booken = $this->bookenModel->booken($data);
                if($booken){
                    redirect('');
                }else if($booken == false){
                    redirect('');
                }
            }
            else{
                redirect('#reservation?error');
            }
        }
        else{
            //init data
            $data = [
                'stadium_id' => '',
                'date' => '',
                'time' => '',
                'error' => ''
            ];
            redirect('Logins');
        }
    }
}