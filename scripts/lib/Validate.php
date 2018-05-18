<?php

class Validate {
    public function __construct(){
	
	}
    public function formEmpty($param) {
        foreach ($param as $key=>$value){
            if (strlen($value) <=0) {
               $error =  true; 
                 break;
            } else {
              $error =  false;
            }
        }
        return $error;
    }
}

