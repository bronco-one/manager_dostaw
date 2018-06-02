<?php
class Dostawy extends Controller {

    public function __construct() {
        parent::__construct();
        Session::init();
        if (Session::get('loggedin')){
        $this->loadModel("dostawy");
        } else {
            header("Location: http://hurtownia.local");
           
        }
        
    }
    
    public function index(){
        $this->view->dostawy = $this->model->viewDostawy();
        $this->view->render('dostawy/index');
       
    }
    public function add(){
        
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $this->view->id = $this->model->addArtykul($_POST);
        }   
        
        //$this->view->dostawcy = $this->model->viewDostawcy();
        $this->view->gatunki = $this->model->viewGatunki();
        $this->view->artykuly = $this->model->viewArtykuly();
        $this->view->render('dostawy/add');
        
    }

}



