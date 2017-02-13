<?php 
require_once 'db.php';

#action get barang


?>

<!DOCTYPE html>
<html>
<title>Absensi Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
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
  <div class="w3-container w3-red">
 <center><h2>Presensi Pulang</h2></center>
  </div>
  <form id="myForm" class="w3-form" role="form" action="proses_pulang.php" enctype="multipart/form-data" method="POST">
     <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Nama:</b></label>
    <input readonly="" id="nama" class="w3-input w3-border w3-sand" name="nama" type="text" required="">
  </div>
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>NIK:</b></label>
    <input autofocus="" id="nik" class="w3-input w3-border w3-sand" name="nik" type="text" required="" autocomplete="off">
  </div>
<h4 style='display:none;' id="telah_pulang"><center><b> Anda Telah Melakukan Presensi Pulang! Anda tidak bisa melakukan presensi dua kali! </b></center></h4>

<span id="pass">
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Password:</b></label>
    <input class="w3-input w3-border w3-sand" id="password" name="password" type="password" required="">
  </div>
   <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Upload Foto:</b></label>
    <input class="w3-input w3-border w3-sand" id="data" name="data" type="file" required="">
  </div>
  <input type="hidden" name="cek_pulang" id="cek_pulang" value="">
  <button id="pulang" type="submit" class="w3-btn w3-brown">Masuk</button>
  </span>
  
  <span id="result"></span>
  <span id="hasil"></span>
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
            
                $('#nik').keyup(function(){
                
                
                
                if ($("#nik").val() != ''){
                
                
                 $.post('ceknama.php',{nik:$(this).val()},function(data){
					
					if (data == "")
					{ $("#nama").val('nama tidak ada'); }
					
					else {  $("#nama").val(data); }
					
					
					});
                    $.post('lihat_status_masuk.php',{nik:$(this).val()}, function(data){
                        if (data == 'masuk' ) {
                            
                             $("#pulang").show();
                             $("#telah_pulang").hide();
                             $("#pass").show();
                             $("#myForm").attr("action", "proses_pulang.php");
                        } 
                        
                        else if(data == 'pulang' ) 
                        {                           
                           $("#pulang").hide();                           
                           $("#telah_pulang").show();
                           $("#pass").hide();
                           $("#myForm").attr("action", "");
                        }
                        else{
                         	$("#pulang").show();
                             $("#telah_pulang").hide();
                             $("#pass").show();
                             $("#myForm").attr("action", "proses_pulang.php");
                             }
                        
                    });
                    
                    }
                });
            });
        </script>

</body>
</html> 