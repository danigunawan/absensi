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
$password =$_POST['password'];
 $daritanggal = $_POST['daritanggal'];
 $sampaitanggal = $_POST['sampaitanggal'];
 
  
 
 	
 
 
$db = new mysqli("localhost", "absensin_admin", "absensinet", "absensin_demo");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

$cek =$db->query("SELECT * FROM daftar_karyawan WHERE nik='$nik' AND password='$password'");

 $data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek); 

if ($jumlah>0)
 
{
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
echo "<br>";
echo "<a href='rekap-excell.php?nama=". $data['nama']." &nik=" . $nik ."&daritanggal=". $daritanggal ."&sampaitanggal=". $sampaitanggal ."' class='btn btn-warning' role='button'>Download Excel</a>";}
?>


</body>
</html>