
<?php 
require_once 'db.php';

#action get barang
if(isset($_GET['action']) && $_GET['action'] == "getBarang") {
    $nik = $_GET['nik'];
 
    //ambil data barang
 $mysqli = new mysqli("localhost", "absensin_admin", "absensinet", "absensin_demo");
$result = $mysqli->query("SELECT status FROM  daftar_karyawan WHERE nik = '$nik' ");
$row = $result->fetch_array();
   
    echo json_encode($row);
    exit;
}

?>
<!DOCTYPE html>
<html>
<title>Absensi Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<?php
include('navbar.php');
?>

 	
</nav>

<div id="main" style="margin-left:25%">

<?php
include('header.php');
?>
<br>

<div class="w3-container">

<div action="form.asp" class="w3-card-4">
  <div class="w3-container w3-deep-orange">
  <h2>Presensi Mulai Istirahat</h2>
  </div>
  <form class="w3-form" role="form" action="proses_istirahat.php" method="POST">
   <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Nama:</b></label>
    <input readonly="" id="nama1" class="w3-input w3-border w3-sand" name="nama" type="text">
  </div>
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>NIK:</b></label>
    <input autofocus="" id="nik1" class="w3-input w3-border w3-sand" name="nik" type="text">
  </div>
  <h4 style='display:none;' id="telah_masuk"><center><b> Anda Belum melakukan Presensi Masuk </b></center></h4>
  <h4 style='display:none;' id="telah_keluar"><center><b> Anda Sudah Presensi Pulang tidak bisa Absen </b></center></h4>
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Password:</b></label>
    <input class="w3-input w3-border w3-sand" name="password" type="password">
  </div>
  
  <button class="w3-btn w3-brown">Mulai</button>
  </div>
  </form>
 <! penutup container 1> </div>

  <br>
<div class="w3-container">

<div action="form.asp" class="w3-card-4">
  <div class="w3-container w3-deep-orange">
  <h2>Presensi Selesai Istirahat</h2>
  </div>
  <form class="w3-form" role="form" action="selesai_istirahat.php" method="POST">
   <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Nama:</b></label>
    <input readonly="" id="nama2" class="w3-input w3-border w3-sand" name="nik" type="text">
  </div>
  <div class="w3-input-group">      
   <label class="w3-label w3-text-brown"><b>NIK:</b></label>
    <input autofocus="" id="nik2" class="w3-input w3-border w3-sand" name="nik" type="text">
  </div> 
  <h4 style='display:none;' id="telah_masuk"><center><b> Anda Belum melakukan presensi Masuk </b></center></h4>
  <h4 style='display:none;' id="telah_keluar"><center><b> Anda Sudah Presensi Pulang tidak bisa Absen  </b></center></h4>
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Password:</b></label>
    <input class="w3-input w3-border w3-sand" name="password" type="password">
  </div>

  <button class="w3-btn w3-brown">Selesai</button>
  </div>
  </form>

 <! penutup main ></div>
<br>

<?php
include('footer.php');
?>

</div>
      <script type="text/javascript">
			$(document).ready(function(){
				$("#nik1").keyup(function(){
					var nik = $("#nik1").val();
					$.post('ceknama.php',{nik:nik},function(data){
					$("#nama1").val(data);
					});
				});
			});
		</script>
	<script type="text/javascript">
			$(document).ready(function(){
				$("#nik2").keyup(function(){
					var nik = $("#nik2").val();
					$.post('ceknama.php',{nik:nik},function(data){
					$("#nama2").val(data);
					});
				});
			});
		</script>
<script type="text/javascript">
            $(document).ready(function(){
                $('#nik1').keyup(function(){
                    $.getJSON('presensi_istirahat.php',{action:'getBarang',nik:$(this).val()}, function(json){
                        if (json =='masuk') {
                            
                             $("#masuk").show();
                             $("#telah_masuk").hide();
                        } 
                        else {
                            
                           $("#pulang").hide();
                           
                           $("#telah_keluar").show();
                        }
                    });
                });
            });
        </script>
 <script type="text/javascript">
            $(document).ready(function(){
                $('#nik2').keyup(function(){
                    $.getJSON('presensi_istirahat.php',{action:'getBarang',nik:$(this).val()}, function(json){
                        if (json =='masuk') {
                            
                             $("#masuk").show();
                             $("#telah_masuk").hide();
                        } 
                        else {
                            
                           $("#pulang").hide();
                           
                           $("#telah_keluar").show();
                        }
                    });
                });
            });
        </script>
 
</body>
</html> 