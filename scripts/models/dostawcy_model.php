<?php

class Dostawcy_Model extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function viewDostawcy() {
        return $this->db->query("SELECT * FROM dostawcy")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addDostawcy($Dostawca) {
        krsort($Dostawca);
        $columns = implode(',', array_keys($Dostawca));
        $values = ':' .implode(', :', array_keys($Dostawca));
        $stmt = $this->db->prepare("INSERT INTO dostawcy($columns) VALUES($values);");
        foreach ($Dostawca as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
        return $this->db->lastInsertId();
    }
}

