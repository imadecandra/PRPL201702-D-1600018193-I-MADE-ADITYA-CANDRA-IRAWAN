<?php
	$db = new mysqli("localhost","root","","hotelhitam");
	

	$sql = "create table pemesanan(id_tamu varchar(10) not null primary key,Nama_tamu varchar(15),alamat varchar(50),ttl varchar(10),no_HP varchar(12))";

	$query = $db->query($sql);
	if($query){
		echo "Tabel berhasil dibuat	";
	}else{
		echo "Tabel gagal dibuat";
	}


?>