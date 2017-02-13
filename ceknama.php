<?php 



require_once 'db.php';

$nik = $_POST['nik'];



$cek = $db->query("SELECT nama FROM daftar_karyawan WHERE nik = '$nik'  ");


 $data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek) ;


if ($jumlah>0)
{

 echo $data['nama'];
}


?>