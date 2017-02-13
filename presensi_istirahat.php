<!DOCTYPE html>
<html>
<title>Absensi Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="w3.css">
<body>

<?php
include('navbar.php');
?>

 	
</nav>

<div id="main" >

<?php
include('header.php');
?>
<br>

<div class="w3-container">

<div action="form.asp" class="w3-card-4">
  <div class="w3-container w3-deep-purple">
  <center><h2>Presensi Mulai Istirahat</h2></center>
  </div>
  <form id="myform1" class="w3-form" role="form" action="proses_istirahat.php" method="POST">
 
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
  
  <button id="masuk1" class="w3-btn w3-brown">Mulai</button>
  </div>
  </form>
  <span id="result1"> </span>
 <! penutup container 1> </div>

  <br>
<div class="w3-container">

<div action="form.asp" class="w3-card-4">
  <div class="w3-container w3-deep-purple">
  <center><h2>Presensi Selesai Istirahat</h2></center>
  </div>
  <form id="myform2" class="w3-form" role="form" action="selesai_istirahat.php" method="POST">
   <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Nama:</b></label>
    <input readonly="" id="nama2" class="w3-input w3-border w3-sand" name="nik" type="text">
  </div>
  <div class="w3-input-group">      
   <label class="w3-label w3-text-brown"><b>NIK:</b></label>
    <input autofocus="" id="nik2" class="w3-input w3-border w3-sand" name="nik" type="text">
  </div> 
   <h4 style='display:none;' id="telah_masuk"><center><b> Anda Belum melakukan Presensi Masuk </b></center></h4>
  <h4 style='display:none;' id="telah_keluar"><center><b> Anda Sudah Presensi Pulang tidak bisa Absen </b></center></h4>
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Password:</b></label>
    <input class="w3-input w3-border w3-sand" name="password" type="password">
  </div>

  <button id="masuk2" class="w3-btn w3-brown">Selesai</button>
  </div>
  </form>
<span id="result2"> </span>
 <! penutup main ></div>
<br>

<?php
include('footer.php');
?>

</div>

<script type="text/javascript">

$("#masuk1").click(function() {
    $.post($("#myform1").attr("action"), $("#myform1 :input").serializeArray(), function(info) { $("#result1").html(info); });
    clearInput();
});

$("#myform1").submit(function(){
    return false;
});

function clearInput(){
    $("#myform1 :input").each(function(){
        $(this).val('');
    });
};



</script>

<script type="text/javascript">

$("#masuk2").click(function() {
    $.post($("#myform2").attr("action"), $("#myform2 :input").serializeArray(), function(info) { $("#result2").html(info); });
    clearInput();
});

$("#myform2").submit(function(){
    return false;
});

function clearInput(){
    $("#myform2 :input").each(function(){
        $(this).val('');
    });
};



</script>
      
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
                            
                             $("#telah_masuk").show();
                             $("#masuk").hide();
                        } 
                        else {
                            
                           $("#telah_keluar").hide();
                           
                           $("#pulang").show();
                        }
                    });
                });
            });
        </script>
 
 
</body>
</html> 