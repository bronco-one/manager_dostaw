<?php

class ZmienHaslo extends Controller {
	
	public $error = array();
	
	public function __construct() {
        parent::__construct();
        if (Session::get('loggedin')) {
            $this->loadModel('zmianahasla');
        } else {
            header("Location: http://hurtownia.local");
        }
    }
    
    public function index(){
		if (isset($_POST['submit'])) {
			unset($_POST['submit']);
			if($this->validate->formEmpty($_POST)){
			 $this->error = 'Formularz wypełniony niepoprawnie!';
			 $this->view->render('zmienHaslo/index');
			}else {
				$_POST = $this->validate->filterString($_POST);
				$user = Session::get('user');
				$email = $_POST['email'];
				$pass = $_POST['password'];
				if($this->model->aktualneHaslo($user,$email,$pass)){
					if ($_POST['password1'] == $_POST['password2']) {
					  $haslo = password_hash($_POST['password1'], PASSWORD_DEFAULT);
					  if($this->model->noweHaslo($haslo,$user,$email)){
						header("Location: http://hurtownia.local");
					  }else{
						$this->error = 'Przepraszamy. Błąd systemu!';
			            $this->view->render('zmienHaslo/index');
					  }
					}else {
				 $this->error = 'Hasła nie pasują do siebie!';
			     $this->view->render('zmienHaslo/index');
					}
					
				
				}else{
				$this->error = 'Aktualne hasło nie jest poprawne!';
			    $this->view->render('zmienHaslo/index');
				}
			}
			
		}
		
     else {
		$this->view->render('zmienHaslo/index');
    }
}
}
