<?php

class ZmienHaslo extends Controller {
	
	public function __construct() {
        parent::__construct();
        if (Session::get('loggedin')) {
            $this->loadModel('zmianahasla');
        } else {
            header("Location: http://hurtownia.local");
        }
    }
    
    public function index(){
		$this->view->render('zmienHaslo/index');
    }
}
