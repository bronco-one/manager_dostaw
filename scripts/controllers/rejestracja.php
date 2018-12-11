<?php

class Rejestracja extends Controller {

    public function __construct() {
        parent::__construct();
        Session::init();
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

            if ($this->validate->formEmpty($_POST)) {
                echo 'Formularz niepoprawny';
            } else {
                if ($_POST['haslo'] == $_POST['haslo2']) {
                    unset($_POST['haslo2']);
                    $_POST = $this->validate->dataTrim($_POST);
                    $_POST = $this->validate->htmlTags($_POST);
                    $_POST['haslo'] = password_hash($_POST['haslo'], PASSWORD_DEFAULT);

                    $this->view->id = $this->model->addUser($_POST);
                } else {
                    $msg = 'Hasła nie są identyczne';
                    $this->view->render('rejestracja/komunikat');
                }
            }
        }
        $this->view->render('rejestracja/komunikat');
    }

}
