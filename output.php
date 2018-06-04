<?php

	$db =  new mysqli("localhost","root","","hotelhitam");
	$sql = "SELECT * FROM pemesanan";
	$data = $db->query($sql);
	
	echo "<h1> Form Tamu</h1>";
	echo "<table border='1' cellpadding='5' cellspacing='0'>";
	echo "<tr bgcolor='#CCCCCC'><td><center>No.</center></td><td><center>id_tamu</center></td><td><center>Nama_tamu</center></td><td><center>alamat
	</center></td><td><center>ttl</center></td><td><center>no_HP</center></td><td colspan=3>";
	if($data->num_rows > 0){
		$no = 1;
		while($row = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$row['id_tamu']."</td>";
			echo "<td>".$row['Nama_tamu']."</td>";
			echo "<td>".$row['alamat']."</td>";
			echo "<td>".$row['ttl']."</td>";	
			echo "<td>".$row['no_HP']."</td>";
			echo "</tr>";	
		}
	}else{
		echo "Data Kosong";
	}
	
	echo "</table>";
	echo "<a href='/hitam/'> Kembali Ke Menu</a>";
	$db->close();
?>