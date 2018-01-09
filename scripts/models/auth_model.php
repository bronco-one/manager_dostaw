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
       $stmt->bindValue(':pass', md5($pass.$this->salt));
       $users = $stmt->execute();
       if ($users >0) {
           $stmt->close();
           return TRUE;
       } else {
           $stmt->close();
           return FALSE;
       }
    
}
public function loginOn() {
    if (isset($_SESSION['loggedin'])) {
        return TRUE;
    } else {
        return FALSE;
    }
}
public function loginOut() {
    session_destroy();
    session_start();
}
}

