<?php
require_once('db.php');

$ktp = $_FILES['data']['name'];
 $tmp  = $_FILES['data']['tmp_name'];
move_uploaded_file($tmp,'foto_izin/'.$ktp);

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$mulai = $_POST['mulai_izin'];
$selesai = $_POST['selesai_izin'];
$keterangan = $_POST['keterangan'];

$insert = $db->query("INSERT INTO izin (nik,nama,password,mulai_izin,selesai_izin,gambar,keterangan,tanggal) VALUES('$nik','$nama','$password','$mulai','$selesai','$ktp','$keterangan',now())");

	header('location:presensi_izin.php');

			
?>