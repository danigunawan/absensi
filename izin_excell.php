<?php

$nik = $_GET['nik'];
$daritanggal = $_GET['daritanggal'];
$sampaitanggal = $_GET['sampaitanggal'];

require_once "excel.class.php";
 
#koneksi ke mysql
$mysqli = new mysqli("localhost","absensin_admin","absensinet","absensin_demo");
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_error . ') ');
}
#akhir koneksi
 
#ambil data
$query = "SELECT nik,nama,mulai_izin,selesai_izin,keterangan FROM izin WHERE nik = '$nik' AND tanggal >= '$daritanggal' AND tanggal <= '$sampaitanggal' order by tanggal asc";
$sql = $mysqli->query($query);
$arrmhs = array();
while ($row = $sql->fetch_assoc()) {
	array_push($arrmhs, $row);
}
#akhir data
 
$excel = new Excel();
#Send Header
$excel->setHeader('Rekap Absen.xls');
$excel->BOF();
 
#header tabel
$excel->writeLabel(0, 0, "NIK");
$excel->writeLabel(0, 1, "NAMA");
$excel->writeLabel(0, 2, "MULAI IZIN");
$excel->writeLabel(0, 3, "SELESAI IZIN");
$excel->writeLabel(0, 5, "KETERANGAN");
 
#isi data
$i = 1;
foreach ($arrmhs as $baris) {
	$j = 0;
	foreach ($baris as $value) {
		$excel->writeLabel($i, $j, $value);
		$j++;
	}
	$i++;
}
 
$excel->EOF();
 
exit();
?>