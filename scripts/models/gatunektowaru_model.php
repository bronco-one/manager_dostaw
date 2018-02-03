<?php

class Gatunektowaru_Model extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function viewGatunki() {
        return $this->db->query("SELECT * FROM rodzaje_art")->fetchAll(PDO::FETCH_ASSOC);
    }
      public function addGatunek($Gatunek) {
        krsort($Gatunek);
        $columns = implode(',', array_keys($Gatunek));
        $values = ':'.implode(', :', array_keys($Gatunek));
        $stmt = $this->db->prepare("INSERT INTO rodzaje_art($columns) VALUES($values);");
        foreach ($Gatunek as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    public function viewGatunek($id) {
      $stmt = $this->db->prepare("SELECT * FROM rodzaje_art WHERE id_gat =:id");
      $stmt->execute(['id'=>(int)$id]);
      return $gatunek = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
    }
    public function updateGatunek($Gatunek) {
      
        $stmt = $this->db->prepare("UPDATE rodzaje_art SET "
        . "nazwa_rodzaju =:nazwa WHERE id_gat =:id");
        $stmt->bindValue(':nazwa',$Gatunek['nazwa_rodzaju']);
        $stmt->bindValue(':id',(int)$Gatunek['id_gat']);
        $stmt->execute();
        return true;
    }
    public function deleteGatunek($id) {
      $stmt = $this->db->prepare("DELETE FROM rodzaje_art WHERE id_gat =:id LIMIT 1");
      if($stmt->execute(['id'=>(int)$id])){
          header('Location:/gatunekTowaru/index');
      }  
    }

}

