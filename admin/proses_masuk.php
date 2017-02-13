<?php
require_once('db.php');
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$cek_masuk = $_POST['cek_masuk'];

$cek = $db->query("SELECT * FROM daftar_karyawan where nik='$nik' AND password = '$password' ");

 $data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek);




if ($jumlah == 0)
{
	


echo"<center><h2> PASSWORD YANG ANDA MASUKKAN SALAH! </h2></center>";

echo "<meta http-equiv='refresh' content='1; url=presensi_masuk.php'>";


}


	elseif ( $cek_masuk == 1 ) {
	
	echo"<center><h2> GAGAL,ANDA TELAH MELAKUKAN ABSEN HARI INI</h2></center>";
	echo "<meta http-equiv='refresh' content='1; url=presensi_masuk.php'>";

	
	
				}
				
				else {
				
				echo"<center><h2> BERHASIL PRESENSI MASUK </h2></center>";
	
	$db->query(" INSERT INTO  presensi (nik,nama,jam_masuk,tanggal_masuk,waktu_masuk) values
('$nik','$nama',now(),now(),now())");
	$db->query("UPDATE daftar_karyawan SET status='masuk' WHERE nik='$nik'");
	
	echo "<meta http-equiv='refresh' content='1; url=presensi_masuk.php'>";
				
				
				
							}






?>