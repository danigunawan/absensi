<!DOCTYPE html>
<html>
<title>Absensi Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script
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

<! penutup container>
<div action="form.asp" class="w3-card-4">
  <div class="w3-container w3-deep-orange">
  <h2>Lupa Password</h2>
  </div>
  <form class="w3-form" role="form" action="proses_lupapw.php" method="POST">
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>NIK:</b></label>
    <input autofocus="" id="nik" class="w3-input w3-border w3-sand" name="nik" type="text" required="">
  </div>
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Pertanyaan:</b></label>
    <input readonly="" id="pertanyaan" class="w3-input w3-border w3-sand" name="pertanyaan" type="text" required="">
  </div>
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Jawaban:</b></label>
    <input  class="w3-input w3-border w3-sand" name="jawaban" type="text" required="">
  </div>
  
  <button type="submit" class="w3-btn w3-brown">Masuk</button>
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
					$.post('cekpertanyaan.php',{nik:nik},function(data){
					$("#pertanyaan").val(data);
					});
				});
			});
		</script>
</body>
</html> 