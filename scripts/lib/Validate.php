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

    public function htmlTags($param) {
        foreach ($param as $key => $value) {
            $param[$key] = strip_tags($value);
        }
        return $param;
    }

    public function dataTrim($param) {
        foreach ($param as $key => $value) {
            $param[$key] = trim($value);
        }
        return $param;
    }

}
