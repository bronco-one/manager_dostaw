<?php

class Dostawcy extends Controller {

    public function __construct() {
        parent::__construct();
        $this->loadModel("dostawcy");
    }
    
    public function index(){
        $this->view->dostawcy = $this->model->viewDostawcy();
        $this->view->render('dostawcy/index');
    }

}

