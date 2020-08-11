<?php 
$host='localhost';
$db = 'odev3';
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

 $garson_ad="";
 $kat="";
 $marka="";
 $fiyat="";
 $urun_ad="";
 $katliste=[];
 $katlisteid=[];
 $markalis=[];
 $markaid=[];

 $id=$_GET['id'] ;
 $query = $conn->query("SELECT * FROM kargo inner join kategori on (kat_id=katag_id) inner join mal on (mal.mal_id=kargo.mal_id)  where kargo_id = ".$id." limit 1");
 while ($row = $query->fetch()) {
    $garson_ad=$row['kargo_ad'];
    $kat=$row['katag_id'];
    $marka=$row['mal_id'];
    $urun_ad=$row['kargo_sahip'];
 }
 $query = $conn->query("SELECT * FROM  kategori");
 while ($row = $query->fetch()) {
    array_push($katliste,$row['kat_ad']);
    array_push($katlisteid,$row['kat_id']);
 }
 $query = $conn->query("SELECT * FROM  mal");
 while ($row = $query->fetch()) {
    array_push($markalis,$row['mal_ad']);
    array_push($markaid,$row['mal_id']);
 }


echo json_encode(array('a' => $garson_ad ,'b'=>$kat,'c'=>$katliste,'d'=>$katlisteid,'e'=>$id,'f'=>$markalis,'g'=>$markaid,'h'=>$marka,'z'=>$urun_ad)); 