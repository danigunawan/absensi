<?php 



require_once 'db.php';

$nik = $_POST['nik'];



$cek = $db->query("SELECT nama FROM presensi WHERE nik = '$nik' AND tanggal_masuk = CURDATE()  ");


 $data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek) ;


if ($jumlah>0)
{

 echo "1";
}


?>