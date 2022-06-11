<?php

class Logins extends Controller {

    public function __construct() {
        $this->loginModel = $this->model('login');
    }

    public function index(){
        $this->view('login/index');
    }

    public function signup() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'first_name' => trim($_POST['first_name']),
                'last_name' => trim($_POST['last_name']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),
                'password' => trim($_POST['password']),
                'conf_password' => trim($_POST['conf_password']),
                'role' => trim($_POST['role']),
                'error' => ''
            ];
            if((!empty($data['first_name'])) && (!empty($data['last_name'])) && (!empty($data['email'])) && (!empty($data['phone'])) && (!empty($data['password'])) && (!empty($data['conf_password'])) && (!empty($data['role']))){
                if($data['password'] == $data['conf_password']){
                    $login = $this->loginModel->signup($data);
                    if($login){
                        redirect('Logins#sign_in?successful');
                    }else if($login == false){
                        redirect('Logins#sign_up?repeat_signup');
                    }
                }else{
                    redirect('Logins#sign_up?confirm_signup');
                }
            }
            else{
                redirect('Logins#sign_up?fill_signup');
            }
        }
    }
  

}