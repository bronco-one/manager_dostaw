<?php 

class Miary extends Controller {

    public function __construct() {
        parent::__construct();
        Session::init();
        if (Session::get('loggedin')){
        $this->loadModel("miary");
        } else {
            header("Location: http://hurtownia.local");
           
        }
        
    }
    
    public function index(){
       $this->view->miary = $this->model->viewMiary();
        $this->view->render('miary/index');
      
    }
    public function add() {
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $this->view->id = $this->model->addMiary($_POST);
        }
        $this->view->render('miary/add');
    }
     public function updateView() {
        $id = $_POST['id'];
       
        $this->view->miary = $this->model->viewMiara($id);
        $this->view->render('miary/update'); 
    }
    public function update() {
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $this->view->id = $this->model->updateMiara($_POST);
        }
        $this->view->render('miary/update');
    }
    public function delete() {
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $this->view->id = $this->model->deleteMiara($_POST);
        }
        
    }

}