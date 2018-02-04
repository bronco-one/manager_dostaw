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
}
