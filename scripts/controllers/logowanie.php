<?php

class Logowanie extends Controller {

    public function __construct() {
        parent::__construct();
        Session::init();
        $this->loadModel('auth');
        
        
        //$alert = new Alerts();
        
        
        
            
        }
        public function index() {
         $user = Session::get('user');
         $this->view->user = $user?$user:'';
         $this->view->message = isset($_GET['message'])?$_GET['message']:'';
         $this->view->render("logowanie/logowanie");   
        }

        public function logowanie() {
            $user =$_POST['user'];
            $pass =$_POST['pass'];
            $this->model->login($user,$pass);
            
            
        }
        public function logout() {
           Session::destroy();
           $this->view->render("logowanie/logowanie");
        }
   
    }

//}

