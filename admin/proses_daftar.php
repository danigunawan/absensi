<?php
require_once('db.php');
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$nohp = $_POST['no_hp'];
$pertanyaan = $_POST['pertanyaan'];
$jawaban = $_POST['jawaban'];
$waktu_presensi = $_POST['waktu_presensi'];

// cek ke database apakah nik yang di daftarkan sudah terdaftar atau belum 
$cek = $db->query ("SELECT * FROM daftar_karyawan WHERE nik = '$nik'");

$data = mysqli_fetch_array($cek);
//untuk mengetahui jumlah data yang di select
$jumlah = mysqli_num_rows($cek);

if ($jumlah>0)
{
	echo"<center><h2>GAGAL,NIK YANG ANDA MASUKAN SUDAH TERDAFTAR! <br> <b><a href='daftar_karyawan.php'>
	ULANGI </a></b></h2></center>";


}

else {

	$db->query("INSERT INTO daftar_karyawan (nik,nama,password,jabatan,alamat,no_hp,pertanyaan,jawaban,waktu_presensi) VALUES
	('$nik','$nama','$password','$jabatan','$alamat','$nohp','$pertanyaan','$jawaban','$waktu_presensi')");


echo"<center><h2>BERHASIL TERDAFTAR</h2></center>";
echo "<meta http-equiv='refresh'  content='1; url=daftar_karyawan.php'>";
}
?>