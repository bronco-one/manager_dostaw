<?php

class Validate {

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

   

}
