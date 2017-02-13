

<?php 
require_once 'db.php';

#action get barang
if(isset($_GET['action']) && $_GET['action'] == "getBarang") {
    $nik = $_GET['nik'];
 
    //ambil data barang
 $mysqli = new mysqli("localhost", "absensin_admin", "absensinet", "absensin_demo");
$result = $mysqli->query("SELECT nik FROM  presensi WHERE nik = '$nik' AND tanggal_masuk = CURDATE() ");
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

<! penutup container>
<div action="form.asp" class="w3-card-4">
  <div class="w3-container w3-deep-orange">
  <h2>Presensi Masuk</h2>
  </div>
  <form id="myForm" class="w3-form" role="form" action="proses_masuk.php" method="POST">
   <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Nama:</b></label>
    <input readonly="" id="nama" class="w3-input w3-border w3-sand" name="nama" type="text" required="" value="">
  </div>
    
   <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>NIK:</b></label>
    <input autofocus="" id="nik" class="w3-input w3-border w3-sand" name="nik" type="text" required="">
   </div>
 <h4 style='display:none;' id="telah_masuk"><center><b> Anda Telah Melakukan Presensi Masuk! Anda tidak bisa melakukan presensi dua kali! </b></center></h4>
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Password:</b></label>
    <input class="w3-input w3-border w3-sand" id="password" name="password" type="password" required="">
  </div>
  <input type="hidden" name="cek_masuk" id="cek_masuk" value="">
  

<button class="masuk" id="masuk" type="submit" >Masuk</button>
  <span id="result"></span>
  </form>
</div>
 </div>
<br>
<?php
include('footer.php');
?>

</div>


<script type="text/javascript">

$("#masuk").click(function() {
    $.post($("#myForm").attr("action"), $("#myForm :input").serializeArray(), function(info) { $("#result").html(info); });
    clearInput();
});

$("#myForm").submit(function(){
    return false;
});

function clearInput(){
    $("#myForm :input").each(function(){
        $(this).val('');
    });
};



</script>
      
 <script type="text/javascript">
			$(document).ready(function(){
				$("#nik").keyup(function(){
					var nik = $("#nik").val();
					$.post('ceknama.php',{nik:nik},function(data){
					
					if (data == "")
					{ $("#nama").val('nama tidak ada'); }
					else {  $("#nama").val(data); }
					
					
					});
					
					$.post('cekmasuk.php',{nik:nik},function(data){
					$("#cek_masuk").val(data);
					});
				});
			});
		</script>

<script type="text/javascript">
            $(document).ready(function(){
                $('#nik').keyup(function(){
                    $.getJSON('presensi_masuk.php',{action:'getBarang',nik:$(this).val()}, function(json){
                        if (json == null) {
                            
                             $("#masuk").show();
                             $("#telah_masuk").hide();
                        } 
                        else {
                            
                           $("#masuk").hide();
                           
                           $("#telah_masuk").show();
                        }
                    });
                });
            });
        </script>

</body>
</html> 