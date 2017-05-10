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
public function pokazProduktyDostawcy($id){
$sql='SELECT rodzaje_art.nazwa_rodzaju, artykuly.nazwa_art FROM artykuly, rodzaje_art 
 WHERE artykuly.id_gat = rodzaje_art.id_gat and artykuly.id_dostawcy =:id_dostawcy';
$stmt=$this->db_conn->prepare($sql);
$stmt->bindValue(':id_dostawcy',$id);
$stmt->execute();
$result=$stmt->fetchAll();
return $result;
}
public function pokazDostawyDostawcy($id){
$sql='SELECT rodzaje_art.nazwa_rodzaju, artykuly.nazwa_art, partie_towaru.ilosc_przyjeta,
partie_towaru.ilosc_aktualna, partie_towaru.data_przyjecia FROM rodzaje_art, artykuly,
partie_towaru WHERE artykuly.id_gat=rodzaje_art.id_gat AND partie_towaru.id_art = artykuly.id_art 
AND artykuly.id_dostawcy =:id_dostawcy';
$stmt=$this->db_conn->prepare($sql);
$stmt->bindValue(':id_dostawcy',$id);
$stmt->execute();
$result=$stmt->fetchAll();
return $result;

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
      if ($stmt->lastInsertId()) {
          echo 'Nowy dostawca został dodany.';
          
      }else {
          echo 'Wystąpił błąd systemu.';
          
      }
      
      
}
public function aktualizujDaneDostawcy($id){
$sql='UPDATE dostawcy SET nazwa_dost=:nazwa_dost,miasto=:miasto,adres_ul=:adres_ul,email=:email,
telefon=:telefon,os_do_kontaktu=:os_do_kontaktu WHERE id_dostawcy=:id_dostawcy ';
      $stmt=$this->db_conn->prepare($sql);
      $stmt->bindValue(':nazwa_dost',$nazwa);
      $stmt->bindValue(':miasto',$miasto);
      $stmt->bindValue(':adres_ul',$adres);
      $stmt->bindValue(':email',$email);
      $stmt->bindValue(':telefon',$tel);
      $stmt->bindValue(':os_do_kontaktu',$kontakt);
      $stmt->execute();
      if ($stmt->lastInsertId()) {
          echo 'Wpis został uaktualniony.';
          
      }else {
          echo 'Wystąpił błąd systemu.';
          
      }
}
public function usunDostawce($id){
$sql='DELETE FROM dostawcy WHERE id_dostawcy = :id_dostawcy';
$stmt=$this->db_conn->prepare($sql);
$stmt->bindValue(':id_dostawcy',$id);
$stmt->execute();
  if ($stmt->rowCount()) {
          echo 'Dostawca został usunięty.';
          
      }else {
          echo 'Wystąpił błąd systemu.';
          
      }
}

}

    
