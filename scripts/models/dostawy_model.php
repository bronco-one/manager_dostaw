<?php

class Dostawy_Model extends Model{
   public function __construct() {
        parent::__construct();
    } 
public function viewArtykuly() {
     
    
    return $this->db->query("SELECT id_art,nazwa_art FROM artykuly")->fetchAll(PDO::FETCH_ASSOC);
    
}
public function viewGatunek() {
        return $this->db->query("SELECT id_gat FROM rodzaje_art")->fetchAll(PDO::FETCH_ASSOC);
    }
public function viewGatunki() {
        return $this->db->query("SELECT id_gat,nazwa_rodzaju FROM rodzaje_art")->fetchAll(PDO::FETCH_ASSOC);
    }

}