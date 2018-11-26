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
            $this->view->id = $this->model->addUser($_POST);
        }
        $this->view->render('rejestracja/komunikat');
    }

}
