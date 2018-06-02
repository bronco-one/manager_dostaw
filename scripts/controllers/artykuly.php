<?php
class Artykuly extends Controller {

    public function __construct() {
        parent::__construct();
        Session::init();
        if (Session::get('loggedin')){
        $this->loadModel("artykuly");
        } else {
            header("Location: http://hurtownia.local");
           
        }
        
    }
    
    public function index(){
        $this->view->artykuly = $this->model->viewArtykuly();
        $this->view->render('artykuly/index');
       
    }
    public function add(){
       
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $this->view->id = $this->model->addArtykul($_POST);
        }   
        
        $this->view->dostawcy = $this->model->viewDostawcy();
        $this->view->gatunki = $this->model->viewGatunki();
        $this->view->miary = $this->model->viewMiary();
        $this->view->render('artykuly/add');
        
    }

}