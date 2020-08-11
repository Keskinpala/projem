<?php error_reporting(0); 
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
 $id= $_POST['id'] ;

 if($_POST) 
		{
      
		if($sonuc = $conn ->query("DELETE FROM kargo_takip WHERE takip_id=$id")==true){
            header ('Location:sil.php?sonuc=basarı');
        }else{
            header ('Location:sil.php?sonuc=not');
          }
          
          if($sonuc){
          header ('Location:sil.php?sonuc=basarı');
          }
          else	{
          header ('Location:sil.php?sonuc=not');
          }
          }
include('../head.php')?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include('../sidebar.php')?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

                    <!-- Topbar Search -->
                   
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                       

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Takip sil</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

<?php
if($_GET['sonuc']=="basarı" ){

echo  '<div class="succ-alert" id="alert">';
echo  '<span class="closebtn" onclick="this.parentElement.style.display=/"none"/;">&times;</span> ';
echo  '<strong>Başarılı!</strong> Kayıt başarıyla silindi..';
echo  '</div>';

}
if($_GET['sonuc']=="not"){

echo  '<div class="danger-alert" id="alert">';
echo  '<span class="closebtn" onclick="this.parentElement.style.display=/"none"/;">&times;</span> ';
echo  '<strong>Başarısız!!!</strong> Kayıt silerken hatayla karşılaşıldı lütfen alanları doğru doldurduğuza emin olunuz veya serverin aktif olduğunu doğrulayınız..';
echo  '</div>';

}
?>
<div class="table-responsive">
<table class="table table-bordered dataTable">
<tr ><th style='text-align:center;'>Kargo adi</th>
<th style='text-align:center;'>Nereye çıkışı var</th>
<th style='text-align:center;'> Sil</th>
</tr>

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
$query = $conn->query("SELECT * FROM kargo_takip inner join kargo on (kargo_takip.kargo_id=kargo.kargo_id)");

while ($row = $query->fetch()) {
echo "<tr ><td style='text-align:center;'>".$row['kargo_ad']."</td>";
echo "<td style='text-align:center;'>".$row['takip_nerede']."</td>";
echo "<form form action='sil.php' method='post'><td style='text-align:center;'> <input type='hidden' name='id'value='".$row['takip_id']."'> <input type='submit'value='Sil' ></form>";
}

?>
</table>
</div>
                        
                    

                </div>
                <!-- /.container-fluid -->
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('../footer.php')?>
</body>

</html>