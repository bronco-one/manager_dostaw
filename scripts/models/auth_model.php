<?php

class Auth_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function login($user, $pass) {
        $sql = "SELECT imie, haslo FROM uzytkownicy WHERE login = :user ";
        $stmt = $this->db->prepare($sql);

        $stmt->execute([':user' => $user]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $num = $stmt->rowCount();
        if ($num > 0 && password_verify($pass, $data['haslo'])) {
            Session::set('loggedin', true);
            Session::set('user', $user['imie']);
            header('Location:/dostawcy/index');
            //$stmt->close();
        } else {
            header('Location:/logowanie/logowanie'); //?message='.urlencode('Błąd logowania'));
            // $stmt->close();
        }
    }

}
