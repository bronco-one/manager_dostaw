<?php

class Alerts{
    
    private $alerts;
    private $type;
    public function __construct() {
        
    }
   
    public function setAlert($type,$message) {
       $this->type[$type] = $type;
       $this->alerts[$type]=$message; 
    }
    public function getAlert($type) {
        return $this->alerts[$type];
    }
    
}

