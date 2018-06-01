<?php

class Artykuly_Model extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function viewArtykuly() {
        return $this->db->query("SELECT nazwa_dost,nazwa_rodzaju,nazwa_art,wielkosc_miary,miara,id_art"
                . " FROM artykuly, dostawcy, rodzaje_art, miary"
                . " WHERE artykuly.id_dostawcy = dostawcy.id_dostawcy"
                . " AND artykuly.id_gat = rodzaje_art.id_gat"
                . " AND artykuly.id_miary = miary.id_miary")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addArtykul($Artykul) {
        krsort($Artykul);
        $columns = implode(',', array_keys($Artykul));
        $values = ':'.implode(', :', array_keys($Artykul));
        $stmt = $this->db->prepare("INSERT INTO artykuly($columns) VALUES($values);");
        foreach ($Artykul as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    public function viewDostawcy() {
        return $this->db->query("SELECT id_dostawcy,nazwa_dost FROM dostawcy")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function viewGatunki() {
        return $this->db->query("SELECT id_gat,nazwa_rodzaju FROM rodzaje_art")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function viewMiary() {
        return $this->db->query("SELECT id_miary,miara FROM miary")->fetchAll(PDO::FETCH_ASSOC);
    }
}
