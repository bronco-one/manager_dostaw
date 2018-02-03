<?php

class Miary_Model extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function viewMiary() {
        return $this->db->query("SELECT * FROM miary")->fetchAll(PDO::FETCH_ASSOC);
    }

}