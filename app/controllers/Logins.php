<?php

class Logins extends Controller {

    public function __construct() {
        $this->loginModel = $this->model('login');
    }

    public function index(){
        if(!isset($_SESSION['user_id'])){
            $this->view('login/index');
        }
        else{
            redirect('');
        }
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
                    if(!($this->loginModel->userExists($data))){
                        $login = $this->loginModel->signup($data);
                        if($login){
                            redirect('Logins#sign_in?successful');
                        }else if($login == false){
                            redirect('Logins#sign_up?repeat_signup');
                        }
                    }else{
                        redirect('Logins#sign_in?email_error');
                    }
                }else{
                    redirect('Logins#sign_up?confirm_signup');
                }
            }
            else{
                redirect('Logins#sign_up?fill_signup');
            }
        }
        else{
            //init data
            $data = [
                'first_name' => '',
                'last_name' => '',
                'email' => '',
                'phone' => '',
                'password' => '',
                'conf_password' => '',
                'role' => '',
                'error' => ''
            ];
            redirect('Logins');
        }
    }


    public function signin() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'error' => ''
            ];
            if((!empty($data['email'])) && (!empty($data['password']))){
                $login = $this->loginModel->signin($data);
                if($login){
                    $this->createUserSession($login);
                    if($_SESSION['role'] == 3){
                        redirect('');
                    }
                    if($_SESSION['role'] == 2){
                        redirect('DashboardAdmin');
                    }
                    if($_SESSION['role'] == 1){
                        redirect('DashboardManager');
                    }
                    if(isset($_POST['rememberme'])){
                        $this->createUsercoockie($data);
                    }
                }else if($login == false){
                    redirect('Logins#sign_in?error');
                }
            }
            else{
                redirect('Logins#sign_in?fill_signin');
            }
        }else{
            //init data
            $data = [
                'email' => '',
                'password' => '',
                'error' => ''
            ];
            redirect('Logins');      
        }
    }


    public function statusUser() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'user_id' => $_POST['user_id'],
                'status' => $_POST['status']
            ];
            $statusUser = $this->loginModel->statusUser($data);
        }
    }


    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['first_name'] = $user->first_name;
        $_SESSION['last_name'] = $user->last_name;
        $_SESSION['email'] = $user->email;
        $_SESSION['role'] = $user->role;
        $_SESSION['time'] = time();
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['first_name']);
        unset($_SESSION['last_name']);
        unset($_SESSION['email']);
        unset($_SESSION['role']);
        unset($_SESSION['time']);
        session_destroy();
        redirect('');
    }


    public function createUsercoockie($data) {
        setcookie('email' , $data['email'] , time() + 60*60 , null , null , false , true);
        setcookie('password' , $data['password'] , time() + 60*60 , null , null , false , true);
    }
  

}