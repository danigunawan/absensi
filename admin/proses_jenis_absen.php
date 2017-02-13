<?php
require_once('db.php');
$nama_absen = $_POST['nama_absen'];
$waktu_masuk = $_POST['waktu_masuk'];
$waktu_pulang = $_POST['waktu_pulang'];


$cek = $db->query("SELECT * FROM jenis_absen where nama = '$nama_absen' ");

 $data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek);




if ($jumlah > 0)
{
	


echo"<center><h2>  NAMA JENIS ABSEN YANG ANDA MASUKKAN SUDAH ADA </h2></center>";

echo "<meta http-equiv='refresh' content='1; url=waktu_absen.php'>";


}

else 

{
$db->query("insert into jenis_absen (nama, jam_masuk,jam_pulang) values ('$nama_absen','$waktu_masuk','$waktu_pulang') ");
echo "<meta http-equiv='refresh' content='1; url=waktu_absen.php'>";
			}
	
				
							






?>