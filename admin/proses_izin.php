<?php
require_once('db.php');
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$mulai = $_POST['mulai_izin'];
$selesai = $_POST['selesai_izin'];
$foto = $_POST['foto_izin'];

// cek ke database apakah nik yang di daftarkan sudah terdaftar atau belum 
$cek = $db->query ("SELECT * FROM daftar_karyawan WHERE nik = '$nik'");

$data = mysqli_fetch_array($cek);
//untuk mengetahui jumlah data yang di select
$jumlah = mysqli_num_rows($cek);

if ($jumlah>0)
{

$db->query("INSERT INTO izin (nik,nama,mulai_izin,selesai_izin,foto_izin) VALUES
	('$nik','$nama','$mulai','$selesai','$foto')");


echo"<center><h2>BERHASIL PRESENSI IZIN</h2></center>";

echo "<meta http-equiv='refresh'  content='1; url=presensi_izin.php'>";
}

else {

	

echo"<center><h2>NIK YANG ANDA MASUKAN SALAH <br> <b><a href='presensi_izin.php'>
	ULANGI </a></b></h2></center>";

}
?>