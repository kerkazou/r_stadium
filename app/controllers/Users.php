<?php

class Users extends Controller {

    public function __construct() {
        $this->loginModel = $this->model('Login');
    }

    public function index(){
        if(isset($_SESSION['user_id']) && ($_SESSION['role'] == 1) && !(time() - $_SESSION['time'] > 60)) {
            $users = $this->loginModel->getUsers();
            $data = [
                'users' => $users,
            ];
            $this->view('Users/index' , $data);            
        }else{
            redirect('logins/logout');
        }
    }

    public function searchUser(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'search_username' => $_POST['search_username']
            ];
            $searchusers = $this->loginModel->searchUser($data);
            $response='';
            if($searchusers){
                $response = $searchusers;
            }else if($searchusers == false){
                $response= [];
            }
            echo json_encode($response);
        }
    } 
}