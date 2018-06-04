<?php
	$db = new mysqli("localhost","root","");
	$sql = "create database hotelhitam";
	$query = $db->query($sql);
	if($query){
		echo "Database Berhasil dibuat	";
	}
	else{
		echo "Database gagal dibuat".$db->error;
	}
?>