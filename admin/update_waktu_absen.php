<?php
require_once 'db.php';
$nama = $_POST['nama'];
$jam_masuk = $_POST['jam_masuk'];
$jam_pulang = $_POST['jam_pulang'];
$id =$_POST['id'];



$cek = $db->query("SELECT * FROM jenis_absen WHERE id = '$id' ");


 $data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek) ;



if ($jumlah>0)

{
$db->query("UPDATE jenis_absen SET nama = '$nama',jam_masuk = '$jam_masuk',jam_pulang = '$jam_pulang' WHERE id='$id'");
	
	echo "<script>window.location = 'waktu_absen.php';</script>";
}

?>