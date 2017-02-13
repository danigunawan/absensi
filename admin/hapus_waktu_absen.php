<?php
require_once 'db.php';
	$id = $_GET['id'];
		$res = $db->query("DELETE FROM jenis_absen WHERE id= '$id' ");
		if ($res)
		{
			header('location:waktu_absen.php');	
		}
		
?>