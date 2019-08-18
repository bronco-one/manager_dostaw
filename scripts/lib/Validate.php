<?php

class Validate {

	public $errors = array();
	
    public function __construct() {

    }

    public function formEmpty($param) {
        foreach ($param as $key => $value) {
            if (strlen($value) <= 0) {
               $this->errors[]='Pole '.$key.' nie zostało wypełnione.';
                
            } 
        }
        if(empty($this->errors)){
            return true;
            
        }else{
            return false;
        }
        
    }
     public function filterString($param) {
        foreach ($param as $key => $value) {
            $param[$key] = filter_var($value, FILTER_SANITIZE_STRING);
        }
        return $param;
    }

   public function filterEmail($param){
		 $email = filter_var($param, FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	$this->errors[] ='Adres email jest nieprawidłowy!';
    }else {
    	return $email;
    	
    }
    
    
   }

}
