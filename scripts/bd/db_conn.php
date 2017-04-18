<?php 
try{
$db_conn = new PDO('mysql:host=localhost;dbname=hurtownia','bronco','pingwin');
}catch(PDOException $e) {
    echo 'Nie można nawiązać połączenia z bazą danych';
    
}
