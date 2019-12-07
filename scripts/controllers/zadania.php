<?php
class Zadania extends Controller {

    public function __construct() {
        parent::__construct();
        if (Session::get('loggedin')){
       // $this->loadModel("zadania");
       // $id = Session::get("id_user");
        //$zadania = $this->model->zadania($id);
        
        $this->view->render('zadania/index');
        
        } else {
            header("Location: http://hurtownia.local");
           
        }
        
    }
