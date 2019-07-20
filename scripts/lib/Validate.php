<?php

class Validate {

	$errors = array();
	
    public function __construct() {

    }

    public function formEmpty($param) {
        foreach ($param as $key => $value) {
            if (strlen($value) <= 0) {
               return $error = true;
                
            } else {
            
               return $error = false;
            }
        }
        
    }
     public function filterString($param) {
        foreach ($param as $key => $value) {
            $param[$key] = filter_var($value, FILTER_SANITIZE_STRING);
        }
        return $param;
    }

   public function filterEmail($param){
		 $email = filte_var($param, FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	$errors[] ='Adres email jest nieprawidłowy!';
    }else {
    	return $email;
    	
    }
    
    
   }

}
