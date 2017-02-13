<?php
require_once('db.php');
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$cek_pulang = $_POST['cek_pulang'];

$cek = $db->query("SELECT * FROM daftar_karyawan where nik='$nik' AND password = '$password' ");

 $data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek);


if ($jumlah == 0)
{
	


echo"<center><h2> PASSWORD YANG ANDA pulangKAN SALAH! </h2></center>";

echo "<meta http-equiv='refresh' content='1; url=presensi_pulang.php'>";


}


	elseif ($cek_pulang == 1) {
	
	echo"<center><h2> GAGAL,ANDA TELAH MELAKUKAN PRESENSI PULANG HARI INI</h2></center>";
	echo "<meta http-equiv='refresh' content='1; url=presensi_pulang.php'>";

	
	
				}
				
				else {
				
				echo"<center><h2> BERHASIL PRESENSI PULANG </h2></center>";
				
	
	$db->query(" UPDATE presensi SET jam_pulang=now(),tanggal_pulang=now(),waktu_pulang=now() where nik='$nik' and jam_pulang IS NULL"); 
	$db->query(" UPDATE daftar_karyawan SET status='pulang' WHERE nik='$nik'");
	
	echo "<meta http-equiv='refresh' content='1; url=presensi_pulang.php'>";
				
				
				
				}


?>