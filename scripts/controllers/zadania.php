<?php
class Zadania extends Controller {
	public $id;
    public function __construct() {
        parent::__construct();
        if (Session::get('loggedin')){
        $this->id = Session::get("id_user");
        $this->loadModel("zadania");
        
        
        } else {
            header("Location: http://hurtownia.local");
           
        }
	}
        public function index(){
		
        $this->view->zadania = $this->model->viewZadania($this->id);
        
        $this->view->render('zadania/index');
        }
        
    }
