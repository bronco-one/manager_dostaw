<?php

class Data{
    
    private $data;
    
    public function __construct() {
        
    }
    
    public static function setData($key,$value) {
        $this->data[$key]= htmlentities($value,ENT_QUOTES);
   }
   public static function getData($key) {
       return $this->data[$key];
   }
}

