<?php
require_once 'db.php';
	$id = $_GET['id'];
		$res = $db->query("DELETE FROM jabatan WHERE id= '$id' ");
		if ($res)
		{
			header('location:jabatan.php');	
		}
		
?>