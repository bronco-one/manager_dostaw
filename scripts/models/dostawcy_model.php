<?php

class Dostawcy_Model extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function viewDostawcy() {
        return $this->db->query("SELECT * FROM dostawcy")->fetchAll(PDO::FETCH_ASSOC);
    }
}

