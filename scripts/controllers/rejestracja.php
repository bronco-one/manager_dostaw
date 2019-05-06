<?php

class Rejestracja extends Controller {

    public $msg;

    public function __construct() {
        parent::__construct();
        if (Session::get('loggedin')) {
            $this->loadModel('rejestracja');
        } else {
            header("Location: http://hurtownia.local");
        }
    }

    public function rejestracja() {

        $this->view->render('rejestracja/rejestracja');
    }

    public function add() {
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
			if(Session::get('rola') =='admin') {
            if ($this->validate->formEmpty($_POST)) {
                echo 'Formularz niepoprawny';
            } else {
                if ($_POST['haslo'] == $_POST['haslo2']) {
                    unset($_POST['haslo2']);
                    $_POST = $this->validate->dataTrim($_POST);
                    $_POST = $this->validate->htmlTags($_POST);
                    $_POST['haslo'] = password_hash($_POST['haslo'], PASSWORD_DEFAULT);

                    if ($this->view->id = $this->model->addUser($_POST)) {
                        $msg = 'Dodano nowego użytkownika';
                        $this->komunikat($msg);
                        $this->view->render('rejestracja/komunikat');
                    }
                } else {
                    $msg = 'Hasła nie są identyczne';
                    $this->komunikat($msg);
                }
            }
        }else {
        	$this->view->render('rejestracja/rejestracja');
        }
        
    }
    }

    public function komunikat($param) {
        //$this->msg = $param;
       
    }

}
