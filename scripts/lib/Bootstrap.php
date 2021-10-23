<?php

class Bootstrap{
	public function __construct(){
	$url = $_GET['url'];

	$url = explode("/",$url);
		if (empty($url[0])) {
			require_once("controllers/logowanie.php");
			(new Logowanie())->index();
			return false;

		}
		$file_name = "controllers/".$url[0].".php";
		if (!file_exists($file_name)) {
			echo 'Plik nie istnieje';
			return false;

		}
		require_once($file_name);
		$ct_name = ucfirst($url[0]);
		$controller = new $ct_name;

		if (empty($url[1])) {
			$controller->get();
			return false;

		}
		$action_name = isset($url[1])?$url[1]:NULL;
		if ($action_name && method_exists($controller,$action_name)) {
			if (empty($url[2])) {
				$controller->{$url[1]}();
			}else {
				$controller->{$url[1]}($url[2]);
			}


		}
		else {
			echo 'Szukana ajcja nie istnieje';

		}



	}
}
