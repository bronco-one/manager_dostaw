<?php
abstract class Controller {

	public function __construct(){
	$this->view = new View();
}
	public function loadModel($name){
	
	$path ='models/'.$name.'_model.php';
	if (file_exists($path)) {
		require_once("models/".$name."_model.php");
		$modelName = ucfirst($name)."_Model";
		$this->model = new $modelName();
	}
	
	}
}

