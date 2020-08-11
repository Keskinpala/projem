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
 $query = $conn->query("SELECT * FROM kargo_iade inner join kargo on (kargo.kargo_id=kargo_iade.kargo_id)  where kargo_iade_id = ".$id." limit 1");
 while ($row = $query->fetch()) {
    $garson_ad=$row['kargo_ad'];
    $kat=$row['kargo_iade_neden'];
 }


echo json_encode(array('a' => $garson_ad ,'b'=>$kat,'e'=>$id)); 