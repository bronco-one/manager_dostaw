<?php

class Logowanie extends Controller {

    public function __construct() {
        parent::__construct();
        Session::init();
        $this->loadModel("auth");
        
        
        $alert = new Alerts();
        
        
        
            
        }
        public function index() {
         $username = Session::get('username');
         $this->view->username = $username?$username:'';
         $this->view->message = isset($_GET['message'])?$_GET['message']:'';
         $this->view->render("logowanie/logowanie");   
        }

        public function logowanie() {
            $user =$_POST['user'];
            $pass =$_POST['pass'];
            $this->model->login($user,$pass);
            
            
        }
   
    }

//}

