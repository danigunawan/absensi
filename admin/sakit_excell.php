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
$query = "SELECT nik,nama,mulai_sakit,selesai_sakit,keterangan FROM sakit WHERE nik = '$nik' AND tanggal >= '$daritanggal' AND tanggal <= '$sampaitanggal' order by tanggal asc";
$sql = $db->query($query);
$arrmhs = array();
while ($row = $sql->fetch_assoc()) {
	array_push($arrmhs, $row);
}
#akhir data
 
$excel = new Excel();
#Send Header
$excel->setHeader('rekap-excell-absen.xls');
$excel->BOF();
 
#header tabel
$excel->writeLabel(0, 0, "NIK");
$excel->writeLabel(0, 1, "NAMA");
$excel->writeLabel(0, 2, "MULAI SAKIT");
$excel->writeLabel(0, 3, "SELESAI SAKIT");
$excel->writeLabel(0, 4, "KETERANGAN");
 
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