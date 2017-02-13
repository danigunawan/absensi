<?php
require_once('db.php');
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$cek_pulang = $_POST['cek_pulang'];


$gambar_pulang = $_FILES['data']['name'];
 $tmp  = $_FILES['data']['tmp_name'];
move_uploaded_file($tmp,'foto_pulang/'.$gambar_pulang);

$cek = $db->query("SELECT * FROM daftar_karyawan where nik='$nik' AND password = '$password' ");

 $data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek);


if ($jumlah == 0)
{
	


echo"<center><h2> PASSWORD YANG ANDA pulangKAN SALAH! </h2></center>";

echo "<meta http-equiv='refresh' content='2; url=presensi_pulang.php'>";


}


	elseif ($cek_pulang == 1) {
	
	echo"<center><h2> GAGAL,ANDA TELAH MELAKUKAN PRESENSI PULANG HARI INI</h2></center>";
	echo "<meta http-equiv='refresh' content='2; url=presensi_pulang.php'>";

	
	
				}
				
				else {
				

	
	$db->query(" UPDATE presensi SET jam_pulang=now(),tanggal_pulang=now(),waktu_pulang=now(),gambar_pulang = '$gambar_pulang' where nik='$nik' and jam_pulang IS NULL"); 
	
	$cariselisih = $db->query("SELECT timediff(waktu_pulang,waktu_masuk) as jam_kerja FROM presensi WHERE nik = '$nik' AND jam_kerja IS NULL");

 $row = mysqli_fetch_array($cariselisih);
 
 $selisih  = $row['jam_kerja'];
 
 $db->QUERY("UPDATE presensi SET jam_kerja = '$selisih' WHERE jam_kerja IS NULL AND nik = '$nik' ");
 
	echo "<meta http-equiv='refresh' content='2; url=presensi_pulang.php'>";
				
		$db->query("UPDATE daftar_karyawan SET status='pulang' WHERE nik='$nik'");		
				
							}






?>
<div class="container">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">	
<div class="alert alert-success">
  <strong>Left to Presence Success!</strong> Thanks !!
</div>
</div>
