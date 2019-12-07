<?php

class Zadania_Model extends Model {

    public function __construct() {
        parent::__construct();
    }
    public function viewZadania($id) {
        return $this->db->query("SELECT * FROM zadania WHERE id_user =:id ");
        $stmt->execute(['id'=>(int)$id]);
        return $zadania = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
