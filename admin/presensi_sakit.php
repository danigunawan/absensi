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
  <h2>Presensi Sakit</h2>
  </div>
  <form class="w3-form" role="form" action="proses_sakit.php" method="POST">
    <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Nama:</b></label>
    <input readonly="" id="nama" class="w3-input w3-border w3-sand" name="nama" type="text" required="">
  </div>
  
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>NIK:</b></label>
    <input autofocus="" id="nik" class="w3-input w3-border w3-sand" name="nik" type="text" required="">
  </div>

  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Waktu Mulai Sakit:</b></label>
    <input class="w3-input w3-border w3-sand" name="mulai_sakit" type="date" required="">
  </div>
   <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Waktu Selesai Sakit:</b></label>
    <input class="w3-input w3-border w3-sand" name="selesai_sakit" type="date" required="">
  </div>
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Upload Foto Surat Sakit:</b></label>
    <input class="w3-input w3-border w3-sand" name="foto_sakit" type="file" required="">
  </div>
  
  <button type="submit" class="w3-btn w3-brown">Sakit</button>
  </form>
</div>
 </div>
<br>
<?php
include('footer.php');
?>

</div>
      
<script type="text/javascript">
			$(document).ready(function(){
				$("#nik").keyup(function(){
					var nik = $("#nik").val();
					$.post('ceknama.php',{nik:nik},function(data){
					$("#nama").val(data);
					});
				});
			});
		</script>

</body>
</html> 