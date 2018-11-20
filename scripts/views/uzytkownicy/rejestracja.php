<?php

class Rejestracja extends Controller {

    public function __construct() {
        parent::__construct();
        Session::init();
        $this->loadModel('auth');
    }

}
