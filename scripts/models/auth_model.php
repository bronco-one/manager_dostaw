<?php

class Auth_Model extends Model{
    
    private $salt='851a27f3e9b33b77ff0415ef29f40f49';
    
    public function __construct() {
        parent::__construct();
    }
    public function login($user,$pass){
       $sql ="SELECT * FROM uzytkownicy WHERE login = :user AND haslo= :pass";
       $stmt = $this->db->prepare($sql) ;
       $stmt->bindValue(':user',$user);
       $stmt->bindValue(':pass', md5($pass));
       $users = $stmt->execute();
       $num = $stmt->rowCount();
       if ($num >0) {
           Session::set('loggedin', true);
           Session::set('user', $users['user']);
           header('Location:/dostawcy/index');
           //$stmt->close();
           
       } else {
           header('Location:'. BASE_URL.'logowanie/logowanie?message='.urlencode('Błąd logowania'));
           $stmt->close();
           
       }
    
}
}

