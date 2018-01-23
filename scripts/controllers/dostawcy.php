<?php

class Dostawcy extends Controller {

    public function __construct() {
        parent::__construct();
        $this->loadModel("dostawcy");
    }
    
    public function index(){
        if (Session::get('loggedin')) {
            
        
        $this->view->dostawcy = $this->model->viewDostawcy();
        $this->view->render('dostawcy/index');
        } else {
            echo 'Musisz się zalogować !';
            
        }
    }
    public function add() {
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $this->view->id = $this->model->addDostawcy($_POST);
        }
        $this->view->render('dostawcy/add');
    }

}

