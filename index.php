<?php 
require_once 'db.php';


?>

<!DOCTYPE html>
<html>
<title>Absensi Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
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

<!-- penutup container-->
<div action="form.asp" class="w3-card-4">
  <div class="w3-container w3-deep-purple">
  <center><h2>Presensi Masuk</h2></center>
  </div>
  <form id="myForm" class="w3-form" role="form" action="proses_masuk.php"  enctype="multipart/form-data" method="POST">
   <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Nama:</b></label>
    <input readonly="" id="nama" class="w3-input w3-border w3-sand" name="nama" type="text" required="" value="">
  </div>
    
   <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>NIK:</b></label>
    <input autofocus="" id="nik" class="w3-input w3-border w3-sand" name="nik" type="text" required="">
   </div>
 <h4 style='display:none;' id="telah_masuk"><center><b> Anda Telah Melakukan Presensi Masuk! Anda tidak bisa melakukan presensi dua kali! </b></center></h4>
  <span id="pass">
  <div class="w3-input-group">         
    <label class="w3-label w3-text-brown"><b>Password:</b></label>
    <input class="w3-input w3-border w3-sand" id="password" name="password" type="password" required="">
  </div>
  
   <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Upload Foto:</b></label>
    <input class="w3-input w3-border w3-sand" id="data" name="data" type="file" required="">
  </div>
  <input type="hidden" name="cek_masuk" id="cek_masuk" value="">


<button class="masuk" id="masuk" type="submit" >Masuk</button>



</span>
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
            $(document).ready(function(){
                $('#nik').keyup(function(){
                
                if ($("#nik").val() != ''){
                
                
                 $.post('ceknama.php',{nik:$(this).val()},function(data){
					
					if (data == "")
					{ $("#nama").val('nama tidak ada'); }
					else {  $("#nama").val(data); }
					
					
					});
                    $.post('lihat_status_masuk.php',{nik:$(this).val()}, function(data){
                        
                        
                        if (data == 'pulang'  ) {                            
                             $("#masuk").show();
                             $("#telah_masuk").hide();
                             $("#pass").show();
                             $("#myForm").attr("action", "proses_masuk.php");
                             
                        } 
                        else if (data == 'masuk')
                         {
                         
                           $("#masuk").hide();                          
                           $("#telah_masuk").show();
                           $("#pass").hide();
                           $("#myForm").attr("action", "");
                        }
                        else {
                         $("#masuk").show();
                          $("#telah_masuk").hide();
                             $("#pass").show();
                              $("#myForm").attr("action", "proses_masuk.php");
                        }
                        
                    });
                    
                   
                    }
                    
                });
            });
        </script>

</body>
</html> 