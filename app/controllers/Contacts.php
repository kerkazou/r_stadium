<?php

class Contacts extends Controller {

    public function __construct() {
        $this->contactModel = $this->model('Contact');
    }

    public function index(){
        $contacts = $this->contactModel->getContacts();
        $data = [
            'contacts' => $contacts,
        ];
        $this->view('Contacts/index' , $data);
      }

    public function sendMessage() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),
                'message' => $_POST['message'],
                'error' => ''
            ];
            if((!empty($data['username'])) && (!empty($data['email'])) && (!empty($data['phone'])) && (!empty($data['message']))){
                $message = $this->contactModel->sendMessage($data);
                if($message){
                    redirect('site/index#contact', $data);
                }else if($message == false){
                    redirect('site/index#contact', $data);
                }
            }
            else{
                $data['error'] = 'Please, Fill in all the File';
                $this->view('site/index', $data);
            }
        }
    }

}