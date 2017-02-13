<?php
require_once('db.php');


$ktp = $_FILES['data']['name'];
 $tmp  = $_FILES['data']['tmp_name'];
move_uploaded_file($tmp,'foto_sakit/'.$ktp);




$nik = $_POST['nik'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$mulai = $_POST['mulai_sakit'];
$selesai = $_POST['selesai_sakit'];
$keterangan = $_POST['keterangan'];

$insert = $db->query("INSERT INTO sakit (nik,nama,password,mulai_sakit,selesai_sakit,gambar,keterangan,tanggal) VALUES('$nik','$nama','$password','$mulai','$selesai','$ktp','$keterangan',now())");

header('location:presensi_sakit.php');
?>