<?php

class Hurtownia extends Controller {
	public function __construct(){
	
	parent::__construct();
	}
	public function index(){
	$this->view->render("layout/index");
	}
	
	public function get($id=null){
	
	
	}
}

