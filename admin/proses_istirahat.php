<?php
require_once('db.php');
$nik = $_POST['nik'];
$password = $_POST['password'];

$cek = $db->query("SELECT * FROM daftar_karyawan where nik='$nik' and password ='$password' ");

 $data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek);

if ($jumlah>0)
{
	
$db->query(" UPDATE presensi SET jam_mulai_istirahat=now() where nik='$nik'"); 


echo"<center><h2>BERHASIL ABSEN ISTIRAHAT</h2></center>";
echo "<meta http-equiv='refresh' content='1; url=presensi_istirahat.php'>";

}

else {echo"<center><h2>NIK ATAU PASSWORD ANDA SALAH <br> <b><a href='presensi_istirahat.php'>
	ULANGI </a></b></h2></center>";}

?>