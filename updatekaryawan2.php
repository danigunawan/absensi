<?php
require_once 'db.php'; 
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$pertanyaan = $_POST['pertanyaan'];
$jawaban = $_POST['jawaban'];

$cek = $db->query("SELECT * FROM daftar_karyawan WHERE  id = '$id' ");

$data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek) ;



if ($jumlah>0)

{
$db->query("UPDATE daftar_karyawan SET nik = '$nik',nama = '$nama',password = '$password',jabatan = '$jabatan',alamat = '$alamat',no_hp = '$no_hp',pertanyaan = '$pertanyaan',jawaban = '$jawaban' WHERE id = '$id'");

echo "<script>window.location = 'data_karyawan.php';</script>";

}

?>