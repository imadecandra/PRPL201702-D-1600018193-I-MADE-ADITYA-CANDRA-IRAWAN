<?php
	require 'koneksi.php';
	$id_tamu = $_POST['id_tamu'];
	$nama = $_POST['Nama_tamu'];
	$alamat = $_POST['alamat'];
	$ttl = $_POST['ttl'];
	$no_HP = $_POST['no_HP'];
	$insertdata = mysqli_query($con,"INSERT INTO `pengunjung`(`id_pengunjung`, `nama`, `ttl`, `alamat`, `nope`) VALUES ('$id_tamu','$nama', '$ttl','$alamat','$no_HP')");
	if ($insertdata) {
		header('location:input.php');
	}
	else{
		echo "$id_tamu $nama $alamat $ttl $no_HP";
	}
?>