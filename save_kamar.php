<?php
	require 'koneksi.php';
	$No_kamar = $_POST['No_kamar'];
	$type = $_POST['type'];
	$harga = $_POST['harga'];
	$insertdata = mysqli_query($con,"INSERT INTO `kamar`( `nomor_kamar`, `tipe`, `harga`) VALUES ('$No_kamar', '$type','$harga')");
	if ($insertdata) {
		header('location:kamar.php');
	}
	else{
		echo " $No_kamar $type $harga";
	}
?>