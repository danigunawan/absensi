<?php
include 'db.php';
   $nik = $_POST['nik'];
 
    //ambil data barang
$result = $db->query("SELECT status FROM daftar_karyawan WHERE nik = '$nik' ");
$row = mysqli_fetch_array($result);

echo $row['status'];

?>