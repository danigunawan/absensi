<?php
require_once 'db.php';

$jabatan = $_POST['jabatan'];
$nama_lama = $_POST['nama_lama'];



$cek = $db->query("SELECT * FROM jabatan WHERE nama = '$nama_lama' ");


 $data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek) ;



if ($jumlah>0)

 
{
$db->query("UPDATE jabatan SET nama = '$jabatan'  WHERE nama = '$nama_lama'");
	echo "<script>window.location = 'jabatan.php';</script>";
}

?>