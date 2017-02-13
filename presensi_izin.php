<!DOCTYPE html>
<html>
<title>Absensi Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="datepicker/bootstrap-datetimepicker.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="datepicker/bootstrap-datetimepicker.css">
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
  <div class="w3-container w3-deep-purple">
  <center><h2>Presensi Izin</h2></center>
  </div>
  <br>
  <div class="w3-container" style="margin-left:14%">
  
 <form class="form-signin" role="form" method="post" action="proses_izin.php"  enctype="multipart/form-data">
        <div class="input-group">
			<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
			<input type="text" id="nama" readonly="" name=" nama" class="form-control" placeholder="Nama" aria-describedby="basic-addon1" >
		</div>
		<br>
        <div class="input-group">
			<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
			<input type="text" id="nik" name=" nik" class="form-control" placeholder="Nomor Induk Karyawan" aria-describedby="basic-addon1" autofocus>
		</div>
		<br>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
			<input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
		</div>
		<br>
		<div class='input-group date' id='tanggal1'>
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                    <input type='text' name="mulai_izin" class="form-control" placeholder="Tanggal dan Waktu Mulai Izin" />
                   
                </div>
                
                <br>
                <div class='input-group date' id='tanggal2'>
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                    <input type='text' name="selesai_izin" class="form-control" placeholder="Tanggal dan Waktu Selesai Izin" />
                   
                </div>
                
                <br>
		
	

<div class="input-group">
<label for="">Upload Foto Surat Izin</label>
<input type="file" name="data">

</div>
	          
		
		
		<br>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></span>
			<input type="text" name="keterangan" class="form-control" placeholder="Keterangan" aria-describedby="basic-addon1" autofocus>
		</div>
		<br>
		
		
       
        <button class="btn btn-lg btn-warning btn-block" type="submit" type="submit">Izin</button>
      </form>
  
</div>
<br>
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

  <script type="text/javascript">
        $(function () {
            $('#tanggal1').datetimepicker({
                inline: true,
                sideBySide: true
            });
        });
    </script>
    
      <script type="text/javascript">
        $(function () {
            $('#tanggal2').datetimepicker({
                inline: true,
                sideBySide: true
            });
        });
    </script>
    
</body>
</html> 