<?php
require_once('db.php');
$jabatan = $_POST['jabatan'];

// cek ke database apakah nik yang di daftarkan sudah terdaftar atau belum 
$cek = $db->query ("SELECT * FROM jabatan WHERE nama = '$jabatan'");

$data = mysqli_fetch_array($cek);
//untuk mengetahui jumlah data yang di select
$jumlah = mysqli_num_rows($cek);

if ($jumlah>0)
{
	echo"<center><h2>GAGAL,JABATAN YANG ANDA MASUKAN SUDAH TERDAFTAR! <br> <b><a href='jabatan.php'>
	ULANGI </a></b></h2></center>";


}

else {

	$db->query("INSERT INTO jabatan (nama) VALUES
	('$jabatan')");


echo"<center><h2>BERHASIL TERDAFTAR</h2></center>";
echo "<script>window.location = 'jabatan.php';</script>";

}

?>