<?php
class Artykuly extends Controller {

    public function __construct() {
        parent::__construct();
        Session::init();
        $this->loadModel("artykuly");
    }
    
    public function index(){
        if (Session::get('loggedin')) {
            
        
        $this->view->artykuly = $this->model->viewArtykuly();
        $this->view->render('artykuly/index');
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
        
        $this->view->dostawcy = $this->model->viewDostawcy();
        $this->view->gatunki = $this->model->viewGatunki();
        $this->view->miary = $this->model->viewMiary();
        $this->view->render('artykuly/add');
        } else {
            echo 'Musisz się zalogować !';
            
        }
    }

}