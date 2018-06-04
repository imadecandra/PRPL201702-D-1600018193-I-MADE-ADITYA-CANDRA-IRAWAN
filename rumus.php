<?php
	$db = new mysqli("localhost","root","","hotelhitam");
	
	if(isset($_POST['add'])){
		$id_tamu = $_POST['id_tamu'];
		$Nama_tamu = $_POST['Nama_tamu'];
		$alamat = $_POST['alamat'];
		$ttl = $_POST['ttl'];
		$no_HP = $_POST['no_HP'];

		$sql="INSERT INTO pemesanan VALUES ('$id_tamu','$Nama_tamu','$alamat','$ttl','$no_HP')";
		$query=$db->query($sql);
		if($query){
			echo "Data berhasil ditambah";
		}else{
			echo "Data gagal ditambah ".$db->error;
		}
	}
	echo "<a href='/hitam/'>Kembali ke Menu</a> / <a href='input.php'> Masukan dulu datanya</a>";
?>