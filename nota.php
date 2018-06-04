<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="2">
		<tr>
			<th>Nama</th>
			<th>No Kamar</th>
			<th>Tipe</th>
			<th>Harga</th>
			<th>Lama Sewa</th>
			<th>TOTAL</th>
		</tr>
		<tr>
			<td><?php echo $_GET['nama'];?></td>
			<td><?php echo $_GET['nomor_kamar'];?></td>
			<td><?php echo $_GET['tipe'];?></td>
			<td><?php echo $_GET['harga'];?></td>
			<td><?php echo $_GET['hari'];?></td>
			<td><?php echo $_GET['total'];?></td>
		</tr>
	</table>
</body>
</html>