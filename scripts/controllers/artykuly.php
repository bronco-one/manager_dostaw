<?php
class Artykuly extends Controller {

    public function __construct() {
        parent::__construct();
        $this->loadModel("artykuly");
    }
    
    public function index(){
        //if (Session::get('loggedin')) {
            
        
        $this->view->artykuly = $this->model->viewArtykuly();
        $this->view->render('artykuly/index');
       // } else {
           // echo 'Musisz się zalogować !';
            
       // }
    }

}