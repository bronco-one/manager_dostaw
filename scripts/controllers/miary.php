<?php 

class Miary extends Controller {

    public function __construct() {
        parent::__construct();
        $this->loadModel("miary");
    }
    
    public function index(){
        //if (Session::get('loggedin')) {
            
        
        $this->view->miary = $this->model->viewMiary();
        $this->view->render('miary/index');
       // } else {
           // echo 'Musisz się zalogować !';
            
       // }
    }

}