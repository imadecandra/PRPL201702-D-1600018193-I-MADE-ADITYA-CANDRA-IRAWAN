<?php
	require 'koneksi.php';
	$nama = $_POST['nama'];
	$nomor_kamar = $_POST['nomor_kamar'];
	$hari = $_POST['hari'];
	$tampilKamar = mysqli_query($con,"SELECT * FROM kamar WHERE nomor_kamar = '$nomor_kamar'");
	foreach ($tampilKamar as $x) {
		$harga = $x['harga'];
		$tipe = $x['tipe'];
		$id_kamar = $x['id_kamar'];
	}
	$total = $hari * $harga;
	$tampilPengunjung = mysqli_query($con,"SELECT * FROM pengunjung WHERE nama = '$nama'");
	foreach ($tampilPengunjung as $y) {
		$id_pengunjung = $y['id_pengunjung'];
	}
	$insertdata = mysqli_query($con,"INSERT INTO `sewa`(`id_pengunjung`, `id_kamar`, `hari`, `total`) VALUES ('$id_pengunjung', '$id_kamar','$hari','$total')");
	if ($insertdata) {
		header("location:nota.php?nama=$nama&nomor_kamar=$nomor_kamar&tipe=$tipe&harga=$harga&hari=$hari&total=$total");
	}
	else{
		echo "$id_pengunjung $id_kamar $hari $total";
	}
?>