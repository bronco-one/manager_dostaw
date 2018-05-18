<?php
class Dostawy extends Controller {

    public function __construct() {
        parent::__construct();
        Session::init();
        $this->loadModel("dostawy");
    }
    
    public function index(){
        if (Session::get('loggedin')) {
            
        
        $this->view->dostawy = $this->model->viewDostawy();
        $this->view->render('dostawy/index');
        } else {
            echo 'Musisz się zalogować !';
            
        }
    }
    public function add(){
        if (Session::get('loggedin')) {
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $this->view->id = $this->model->addArtykul($_POST);
        }   
        
        //$this->view->dostawcy = $this->model->viewDostawcy();
        $this->view->gatunki = $this->model->viewGatunki();
        $this->view->artykuly = $this->model->viewArtykuly();
        $this->view->render('dostawy/add');
        } else {
            echo 'Musisz się zalogować !';
            
        }
    }

}



