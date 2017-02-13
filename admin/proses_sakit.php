<?php
require_once('db.php');
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$mulai = $_POST['mulai_sakit'];
$selesai = $_POST['selesai_sakit'];
$foto = $_POST['foto_sakit'];

// cek ke database apakah nik yang di daftarkan sudah terdaftar atau belum 
$cek = $db->query ("SELECT * FROM daftar_karyawan WHERE nik = '$nik'");

$data = mysqli_fetch_array($cek);
//untuk mengetahui jumlah data yang di select
$jumlah = mysqli_num_rows($cek);

if ($jumlah>0)
{

$db->query("INSERT INTO sakit (nik,nama,mulai_sakit,selesai_sakit,foto_sakit) VALUES
	('$nik','$nama','$mulai','$selesai','$foto')");


echo"<center><h2>BERHASIL PRESENSI SAKIT </h2></center>";

echo "<meta http-equiv='refresh'  content='1; url=presensi_sakit.php'>";
}

else {
	

echo"<center><h2>NIK YANG ANDA MASUKAN SALAH <br> <b><a href='presensi_sakit.php'>
	ULANGI </a></b></h2></center>";

}
?>