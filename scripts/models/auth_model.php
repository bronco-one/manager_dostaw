<?php

class Auth_Model extends Model{
    
    private $salt='851a27f3e9b33b77ff0415ef29f40f49';
    
    public function __construct() {
        parent::__construct();
    }
    public function Login($user,$pass){
       $sql ="SELECT * FROM users WHERE username = :user AND password= :pass";
       $stmt = $this->db->prepare($sql) ;
       $stmt->bindValue(':user',$user);
       $stmt->bindValue(':pass', md5($pass.$this->salt));
       $user=$stmt->execute();
       if ($user >0) {
           $stmt->close();
           return TRUE;
       } else {
           $stmt->close();
           return FALSE;
       }
    
}
}

