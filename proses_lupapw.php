<?php
SESSION_START();
require_once('db.php');
$nik = $_POST['nik'];
$pertanyaan = $_POST['pertanyaan'];
$jawaban = $_POST['jawaban'];
$cek = $db->query("SELECT  * FROM daftar_karyawan WHERE nik='$nik' AND pertanyaan='$pertanyaan' AND jawaban='$jawaban' ");

$data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek);

if ($jumlah==0)
{
	
	echo"<center><h2> PASSWORD / JAWABAN MASUKAN TERLEBIH DAHULU </h2></center>";

echo "<meta http-equiv='refresh' content='1; url=lupa_pw.php'>";


}

else {
	$_SESSION['password']=$data['password'];
	
	 
echo "<meta http-equiv='refresh' content='1; url=lihatpw.php'>";

}
?>