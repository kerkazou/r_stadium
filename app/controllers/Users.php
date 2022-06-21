<?php

class Users extends Controller {

    public function __construct() {
        $this->contactModel = $this->model('Login');
    }

    public function index(){
        $users = $this->contactModel->getUsers();
        $data = [
            'users' => $users,
        ];
        $this->view('Users/index' , $data);
      }
}