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
        $values = ':'.implode(', :', array_keys($Dostawca));
        $stmt = $this->db->prepare("INSERT INTO dostawcy($columns) VALUES($values);");
        foreach ($Dostawca as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    public function updateDostawca($Dostawca) {
      
        $stmt = $this->db->prepare("UPDATE dostawcy SET "
        . "nazwa_dost =:nazwa_dost,miasto =:miasto, adres_ul =:adres_ul, email =:email,telefon =:telefon, os_do_kontaktu =:os_do_kontaktu"
        . " WHERE id_dostawcy =:id_dostawcy");
        $stmt->bindValue(':nazwa_dost',$Dostawca['nazwa_dost']);
        $stmt->bindValue(':miasto',$Dostawca['miasto']);
        $stmt->bindValue(':adres_ul',$Dostawca['adres_ul']);
        $stmt->bindValue(':email',$Dostawca['email']);
        $stmt->bindValue(':telefon',$Dostawca['telefon']);
        $stmt->bindValue(':os_do_kontaktu',$Dostawca['os_do_kontaktu']);
        $stmt->bindValue(':id_dostawcy',(int)$Dostawca['id_dostawcy']);
        
        $stmt->execute();
        return true;
    }
    public function viewDostawca($id) {
      $stmt = $this->db->prepare("SELECT * FROM dostawcy WHERE id_dostawcy =:id");
      $stmt->execute(['id'=>(int)$id]);
      return $dostawca = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
    }
    public function deleteDostawca($id) {
      $stmt = $this->db->prepare("DELETE FROM dostawcy WHERE id_dostawcy =:id LIMIT 1");
      if($stmt->execute(['id'=>(int)$id])){
          header('Location:/dostawcy/index');
      }  
    }
}

