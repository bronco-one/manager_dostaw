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
        $this->view->rejestracja = $this->model->viewRejestracja();
        $this->view->render('uzytkownicy/rejestracja');
    }

}
