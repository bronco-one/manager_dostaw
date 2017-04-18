<?php 


include_once ($_SERVER['DOCUMENT_ROOT'].'/hurtownia/scripts/bd/db_conn.php');

class Dostawcy {
protected $db_conn;
public function __construct(PDO $db_conn){

$this->db_conn = $db_conn;
}

public function pokazDostawcow(){
$sql='SELECT *FROM dostawcy';
$stmt=$this->db_conn->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll();
return $result;

}
public function pokazDostawce($id){
$sql='SELECT *FROM dostawcy WHERE id_dostawcy = :id_dostawcy';
$stmt=$this->db_conn->prepare($sql);
$stmt->bindValue(':id_dostawcy',$id);
$stmt->execute();
$result=$stmt->fetchAll();
return $result;
}
public function pokazProduktyDostawcy(){

}
public function pokazDostawyDostawcy(){


}
public function dodajDostawce($nazwa,$miasto,$adres,$email,$tel,$kontakt){
$sql='INSERT INTO dostawcy(nazwa_dost,miasto,adres_ul,email,telefon,os_do_kontaktu)
      VALUES(:nazwa_dost,:miasto,:adres_ul,:email,:telefon,:os_do_kontaktu)';
      $stmt=$this->db_conn->prepare($sql);
      $stmt->bindValue(':nazwa_dost',$nazwa);
      $stmt->bindValue(':miasto',$miasto);
      $stmt->bindValue(':adres_ul',$adres);
      $stmt->bindValue(':email',$email);
      $stmt->bindValue(':telefon',$tel);
      $stmt->bindValue(':os_do_kontaktu',$kontakt);
      $stmt->execute();
}
public function usunDostawce($id){
$sql='DELETE FROM dostawcy WHERE id_dostawcy = :id_dostawcy';
$stmt=$this->db_conn->prepare($sql);
$stmt->bindValue(':id_dostawcy',$id);
$stmt->execute();
}

}

    
