<?php

class Miary_Model extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function viewMiary() {
        return $this->db->query("SELECT * FROM miary")->fetchAll(PDO::FETCH_ASSOC);
    }
      public function addMiary($Miara) {
        krsort($Miara);
        $columns = implode(',', array_keys($Miara));
        $values = ':'.implode(', :', array_keys($Miara));
        $stmt = $this->db->prepare("INSERT INTO miary($columns) VALUES($values);");
        foreach ($Miara as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    public function viewMiara($id) {
      $stmt = $this->db->prepare("SELECT * FROM miary WHERE id_miary =:id");
      $stmt->execute(['id'=>(int)$id]);
      return $miara = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
    }
    public function updateMiara($Miara) {
      
        $stmt = $this->db->prepare("UPDATE miary SET "
        . "miara =:miara WHERE id_miary =:id_miary");
        $stmt->bindValue(':miara',$Miara['miara']);
        $stmt->bindValue(':id_miary',(int)$Miara['id_miary']);
        $stmt->execute();
        return true;
    }
    public function deleteMiara($id) {
      $stmt = $this->db->prepare("DELETE FROM miary WHERE id_miary =:id LIMIT 1");
      if($stmt->execute(['id'=>(int)$id])){
          header('Location:/miary/index');
      }  
    }

}