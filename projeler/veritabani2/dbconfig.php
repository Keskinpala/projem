<?php
$host='localhost';
$db = 'odev1';
$username = 'postgres';
$password = '123456';
 
$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
try{
 $conn = new PDO($dsn);

 if($conn){
 
 }
}catch (PDOException $e){
    header ('404.php');
}
?>