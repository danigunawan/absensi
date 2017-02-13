<?php

$nik = $_GET['nik'];
$daritanggal = $_GET['daritanggal'];
$sampaitanggal = $_GET['sampaitanggal'];

require_once "excel.class.php";
 
#koneksi ke mysql
include 'db.php';
if ($db->connect_error) {
    die('Connect Error (' . $db->connect_error . ') ');
}
#akhir koneksi
 
#ambil data
$query = "SELECT nik,nama,tanggal_masuk,tanggal_pulang,jam_masuk,jam_pulang FROM presensi WHERE nik = '$nik' AND tanggal_masuk >= '$daritanggal' AND tanggal_masuk <= '$sampaitanggal' order by tanggal_masuk asc";
$sql = $db->query($query);
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
$excel->writeLabel(0, 1, "NAMA KARYAWAN");
$excel->writeLabel(0, 2, "TANGGAL MASUK");
$excel->writeLabel(0, 3, "TANGGAL PULANG");
$excel->writeLabel(0, 4, "JAM MASUK");
$excel->writeLabel(0, 5, "JAM PULANG");
 
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