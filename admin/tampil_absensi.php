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
 
  
 
 	
 
 
include 'db.php';
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
 
$hasil = $db->query("SELECT * FROM presensi WHERE nik = '$nik' AND tanggal_masuk >= '$daritanggal' AND tanggal_masuk <= '$sampaitanggal' order by tanggal_masuk asc");
echo "<table class='table table-bordered'>
<thead>
<th>Nama  </th>
<th>Tanggal Masuk </th>
<th>Tanggal Pulang</th>
<th>Jam Masuk</th>
<th>Jam Pulang</th>
<th>Jam Kerja</th>


</thead>

";
while ($data = $hasil->fetch_assoc()) {
 
    echo  "<tr><td>". $data['nama'] . "</td><td>" . $data['tanggal_masuk'] . "</td><td>" .  $data['tanggal_pulang'] . "</td><td>" .$data['jam_masuk'] . "</td><td>" . $data['jam_pulang'] . "</td><td>" .$data['jam_kerja'] . "</td></tr>"
    ;
 
}
echo "</table>";

?>
<br>
<a href="rekap-excell.php?nama=<?php echo $data['nama'] ?>&nik=<?php echo $nik?>&daritanggal=<?php echo $daritanggal ?>&sampaitanggal=<?php echo $sampaitanggal ?>" class="btn btn-warning" role="button">Download Excel</a>


</body>
</html>