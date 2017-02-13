<?php
require_once 'db.php';
	$id = $_GET['id'];
		$res = $db->query("DELETE FROM daftar_karyawan WHERE id= '$id' ");
		if ($res)
		{
			header('location:data_karyawan.php');	
		}
		
?>