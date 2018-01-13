<?php

class Logowanie extends Controller {

    public function __construct() {
        parent::__construct();
        $this->loadModel("auth");
        $data = new Data();
        $alert = new Alerts();
        $alert->setAlert('alert', 'Uzupełnij pola');
        $alert->setAlert('error', 'Podanego użytkownika nie odnaleziono w bazie danych');
    
        if (isset($_POST['submit'])) {
            if ($_POST['user'] !='' AND $_POST['pass'] !='') {
            $data->setData('user', $_POST['user']);
            $data->setData('pass', $_POST['pass']);
            } else {
                $alert->getAlert('alert');
                $this->view->render("logowanie/logowanie");
            }
            if ($this->model->login($data->getData('user'),$data->getData('pass')) == FALSE) {
                $alert->getAlert('error');
                $this->view->render("logowanie/logowanie");
            } else {
                $_SESSION['username'] = $data->getData('user');
            }
            
            
        }
   
    }

}

