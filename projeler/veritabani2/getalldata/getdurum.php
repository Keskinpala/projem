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
 $query = $conn->query("SELECT * FROM kargo inner join kargo_durum on (kargo_teslim=kargo_durum_id)  where cicek_id = ".$id." limit 1");
 while ($row = $query->fetch()) {
    $garson_ad=$row['kargo_sahip'];
    $kat=$row['kargo_teslim'];
 }
 $query = $conn->query("SELECT * FROM  kargo_durum");
 while ($row = $query->fetch()) {
    array_push($katliste,$row['kargo_durum_ad']);
    array_push($katlisteid,$row['kargo_durum_id']);
 }


echo json_encode(array('a' => $garson_ad ,'b'=>$kat,'c'=>$katliste,'d'=>$katlisteid,'e'=>$id)); 