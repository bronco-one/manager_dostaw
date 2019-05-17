<?php

class Zmianahasla_Model extends Model {
	
	public function __construct() {
        parent::__construct();
    }
    
    public  function aktualneHaslo($user, $email, $pass){
		$sql = "SELECT  haslo FROM uzytkownicy WHERE login = :user AND email =:email ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':user'=>$user, ':email'=>$email]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $num = $stmt->rowCount();
        if ($num > 0 && password_verify($pass, $data['haslo'])) {
    
             return true;
          } else {
          return false;
         }
	}
	public function noweHaslo($newpass,$user,$email){
		$sql ="UPDATE uzytkownicy SET haslo = :pass WHERE login = :user AND email =:email";
		$stmt = $this->db->prepare($sql);
		$stmt->execute([':pass'=>$newpass,':user'=>$user, ':email'=>$email]);
		
		if ($stmt->rowCount() > 0) {
			return true;
		}else {
			return false;
			
		}
	}
}


