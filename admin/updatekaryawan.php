<?php
require_once 'db.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$pertanyaan = $_POST['pertanyaan'];
$jawaban = $_POST['jawaban'];
$nik_lama = $_POST['nik_lama'];
$nama_lama = $_POST['nama_lama'];
$password_lama = $_POST['password_lama'];
$jabatan_lama = $_POST['jabatan_lama'];
$alamat_lama = $_POST['alamat_lama'];
$no_hp_lama = $_POST['no_hp_lama'];
$pertanyaan_lama = $_POST['pertanyaan_lama'];
$jawaban_lama = $_POST['jawaban_lama'];
$id =$_POST['id'];



$cek = $db->query("SELECT * FROM daftar_karyawan WHERE id = '$id' ");


 $data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek) ;



if ($jumlah>0)

{
$db->query("UPDATE daftar_karyawan SET nik = '$nik',nama = '$nama',password = '$password',jabatan = '$jabatan',alamat = '$alamat',no_hp = '$no_hp',pertanyaan = '$pertanyaan',jawaban = '$jawaban' WHERE id = '$id'");
	
	echo "<script>window.location = 'data_karyawan.php';</script>";
}

?>


