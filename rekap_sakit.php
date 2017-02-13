<!DOCTYPE html>
<html>
<head>
  <title>Rekapitulasi Sakit </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.css">
<script src="datatables/jquery.dataTables.js"></script>
        <script src="datatables/dataTables.bootstrap.js"></script>

</head>
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

<h2>Rekap Sakit</h2>
            <div class="input-group">
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal"><b>Cari</b> <span class="glyphicon glyphicon-search"></span><br>
        </div>
        <br>
         <form id="formtanggal"class="form-inline" action="tampil_sakit.php" method="post" role="form">
         
          <div class="form-group">
      <input type="text" class="form-control" id="nik" autocomplete="off" name="nik" placeholder="Nomor Induk Karyawan ">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="daritgl" autocomplete="off" name="daritanggal" placeholder="Dari Tanggal ">
    </div>
    <div class="form-group">
     
      <input type="text" class="form-control" id="sampaitgl" autocomplete="off" name="sampaitanggal" placeholder="Sampai Tanggal ">
    </div>
    
    <button id="btntanggal" class="btn btn-default">Tampil</button>
    
  </form>
  <br>
  <span id="dataabsen"></span>     
  
  <!  dibawah ini adalah kode untuk modal cari karyawan >
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width:800px">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">CARI KARYAWAN</h4>
                    </div>
                    <div class="modal-body">
                        <table id="siswa" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nik</th>
                                    <th>Nama</th>
				   <th>Jabatan</th>
									
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //Data mentah yang ditampilkan ke tabel    
                                $db = new mysqli("localhost", "absensin_admin", "absensinet", "absensin_demo");
                               $hasil = $db->query("SELECT * FROM daftar_karyawan  ");
                            
                                while ($data =  $hasil->fetch_assoc()) {
                                    ?>
                                    <tr class="pilih" data-nim="<?php echo $data['nik']; ?>" data-nama="<?php echo $data['nama']; ?>">
                                        <td><?php echo $data['nik']; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['jabatan']; ?></td>
										
					
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
            </div>
  		</div>
  
                
<br>
<?php
include('footer.php');
?>

</div>
     
     <script type="text/javascript">

//            jika dipilih, nim akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("nik").value = $(this).attr('data-nim');
               
                $('#myModal').modal('hide');
            });
			

//            tabel lookup mahasiswa
            $(function () {
                $("#siswa").dataTable();
            });

          
        </script>
                
   
<script type="text/javascript">

$("#btntanggal").click(function() {
    $.post($("#formtanggal").attr("action"), $("#formtanggal :input").serializeArray(), function(info) { $("#dataabsen").html(info); });
    
});

$("#formtanggal").submit(function(){
    return false;
});

function clearInput(){
    $("#formtanggal :input").each(function(){
        $(this).val('');
    });
};



</script>
    <script>
  $(function() {
    $( "#daritgl" ).datepicker({
  dateFormat: "yy-mm-dd"
});
  $( "#sampaitgl" ).datepicker({
  dateFormat: "yy-mm-dd"
});
 
 
 
  });
 
 
 
  </script>
   
</body>
</html> 