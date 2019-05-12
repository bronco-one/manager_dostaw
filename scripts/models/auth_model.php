<?php

class Auth_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function login($user, $pass) {
		Session::destroy();
        $sql = "SELECT imie, haslo, rola FROM uzytkownicy WHERE login = :user ";
        $stmt = $this->db->prepare($sql);

        $stmt->execute([':user' => $user]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $num = $stmt->rowCount();
        if ($num > 0 && password_verify($pass, $data['haslo'])) {
			Session::init();
            Session::set('loggedin', true);
            Session::set('user', $user);
            Session::set('rola', $data['rola']);
            
            return true;
        } else {
          
            return false;
        }
    }

}
