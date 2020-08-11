  <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/veritabani/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/veritabani/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/veritabani/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/veritabani/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/veritabani/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/veritabani/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/veritabani/js/demo/chart-pie-demo.js"></script>
<script>
$('.durumduzen').click( function(){
  var id = $(this).attr('id');
 
  $.ajax({
   url:"<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani2/getalldata/getdurum.php"?>",
   type: 'get',
   data: "id="+id,
   Type:"json",
   success:function(html){
     console.log(html);
     html=$.parseJSON(html);
    $('#garson_id').val(html.e);
    $('#fname').val(html.a);
    for (var i = 0; i <  html.d.length; i++) {
      $('#kateg').append('<option value=' + html.d[i] + '>' + html.c[i] + '</option>');
      }
    $('#kateg option[value="'+html.b+'"]').prop('selected', true);
    $('#exampleModal').modal('show')
   },
   error:function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
  }
 
   });

});

$('.iadeduzen').click( function(){
  var id = $(this).attr('id');
 
  $.ajax({
   url:"<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani2/getalldata/getiade.php"?>",
   type: 'get',
   data: "id="+id,
   Type:"json",
   success:function(html){
     console.log(html);
     html=$.parseJSON(html);
    $('#garson_id').val(html.e);
    $('#fname').val(html.a);
    $('#fiyat').val(html.b);
    $('#exampleModal').modal('show')
   },
   error:function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
  }
 
   });

});
$('.urunduzen').click( function(){
  var id = $(this).attr('id');
 
  $.ajax({
   url:"<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani2/getalldata/geturun.php"?>",
   type: 'get',
   data: "id="+id,
   Type:"json",
   success:function(html){
     console.log(html);
     html=$.parseJSON(html);
      $('#garson_id').val(html.e);
      $('#fname').val(html.a);
      $('#fiyat').val(html.z);

    for (var i = 0; i <  html.d.length; i++) {
      $('#kateg').append('<option value=' + html.d[i] + '>' + html.c[i] + '</option>');
      }
      $('#kateg option[value="'+html.b+'"]').prop('selected', true);
      for (var i = 0; i <  html.f.length; i++) {
      $('#tur').append('<option value=' + html.g[i] + '>' + html.f[i] + '</option>');
      }
      $('#tur option[value="'+html.h+'"]').prop('selected', true);
     $('#exampleModal').modal('show')
   },
   error:function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
  }
 
   });

});


//timer
var seconds_left = 3;
var x = document.getElementById("alert")
var myVar = setInterval(myTimer, 1000);
function myTimer() {
    if (seconds_left == 0)
    {
  document.getElementById('alert').style.display = 'none'
    }
    seconds_left-=1;
}

</script>