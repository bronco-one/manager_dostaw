<?php

class Auth_Model extends Model{
    
    private $salt='851a27f3e9b33b77ff0415ef29f40f49';
    
    public function __construct() {
        parent::__construct();
    }
    public function login($user,$pass){
       $sql ="SELECT imie FROM uzytkownicy WHERE login = :user AND haslo= :pass";
       $stmt = $this->db->prepare($sql) ;
       //$stmt->bindValue(':user',$user);
       //$stmt->bindValue(':pass', md5($pass));
       $stmt->execute([':user'=>$user, ':pass'=>md5($pass)]);
       $data = $stmt->fetch(PDO::FETCH_ASSOC);
       $num = $stmt->rowCount();
       if ($num >0) {
           Session::set('loggedin', true);
           Session::set('user', $user['user']);
           header('Location:/dostawcy/index');
           //$stmt->close();
           
       } else {
           header('Location:/logowanie/logowanie');//?message='.urlencode('Błąd logowania'));
          // $stmt->close();
           
       }
    
}
}

