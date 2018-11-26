<?php

class Rejestracja_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function addUser($User) {
        krsort($User);
        $columns = implode(',', array_keys($User));
        $values = ':' . implode(', :', array_keys($User));
        $stmt = $this->db->prepare("INSERT INTO uzytkownicy($columns) VALUES($values);");
        foreach ($User as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    public function usun() {

    }

}
