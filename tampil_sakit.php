<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
  

<?php


$nik = $_POST['nik'];
 $daritanggal = $_POST['daritanggal'];
 $sampaitanggal = $_POST['sampaitanggal'];
 
  
 
 	
 
 
$db = new mysqli("localhost", "absensin_admin", "absensinet", "absensin_demo");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
 
$hasil = $db->query("SELECT * FROM sakit WHERE nik = '$nik' AND tanggal >= '$daritanggal' AND tanggal <= '$sampaitanggal' order by tanggal asc");
echo "<table class='table table-bordered'>
<thead>
<th>NIK  </th>
<th>NAMA</th>
<th>MULAI SAKIT</th>
<th>SELESAI SAKIT</th>
<th>SURAT SAKIT</th>
<th>KETERANGAN</th>



</thead>

";
while ($data = $hasil->fetch_assoc()) {
 
    echo  "<tr><td>". $data['nik'] . "</td><td>" . $data['nama'] . "</td><td>" .  $data['mulai_sakit'] . "</td><td>" .$data['selesai_sakit'] . "</td><td> <img src= imageview_sakit.php?image_id=".$data['id']." style='width:128px;height:128px;'/> </td><td>" .$data['keterangan'] . "</td></tr>"
    ;
 
}
echo "</table>";

?>
<br>
<a href="sakit_excell.php?nama=<?php echo $data['nama'] ?>&nik=<?php echo $nik?>&daritanggal=<?php echo $daritanggal ?>&sampaitanggal=<?php echo $sampaitanggal ?>" class="btn btn-warning" role="button">Download Excel</a>


</body>
</html>