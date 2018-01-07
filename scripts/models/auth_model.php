<?php

class Auth_Model extends Model{
    
    private $salt='851a27f3e9b33b77ff0415ef29f40f49';
    
    public function __construct() {
        parent::__construct();
    }
    public function Login($user,$pass){
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
}

