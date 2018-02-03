<?php 

class GatunekTowaru extends Controller {

    public function __construct() {
        parent::__construct();
        $this->loadModel("gatunektowaru");
    }
    
    public function index(){
        //if (Session::get('loggedin')) {
            
        
        $this->view->gatunki = $this->model->viewGatunki();
        $this->view->render('gatunekTowaru/index');
       // } else {
           // echo 'Musisz się zalogować !';
            
       // }
    }
    public function add() {
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $this->view->id = $this->model->addGatunek($_POST);
        }
        $this->view->render('gatunekTowaru/add');
    }
     public function updateView() {
        $id = $_POST['id'];
       
        $this->view->gatunek = $this->model->viewGatunek($id);
        $this->view->render('gatunekTowaru/update'); 
    }
    public function update() {
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $this->view->id = $this->model->updateGatunek($_POST);
        }
        $this->view->render('gatunekTowaru/update');
    }
    public function delete() {
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $this->view->id = $this->model->deleteGatunek($_POST);
        }
        
    }

}

