<?php

class Logowanie extends Controller {

    public function __construct() {
        parent::__construct();
        $this->loadModel('auth');
    }

    public function index() {
       
        $this->view->render("logowanie/logowanie");
    }

    public function logowanie() {
        if($this->validate->formEmpty($_POST)){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if($this->model->login($user, $pass)){
        header('Location: ../zadania/index');
			
        }else{
			$this->view->render("logowanie/logowanie");
        }
        }else{
         //$er = $this->validate->errors; 
         $this->view->render("logowanie/logowanie");
        // header('Location:logowanie/logowanie');
        }
    }

    public function logout() {
        Session::destroy();
        //$this->view->render("logowanie/logowanie");
        header('Location:logowanie/logowanie');
    }

}
