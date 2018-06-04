<!DOCTYPE html>
<html>
<head>
	<title></title>
  <?php require 'koneksi.php'; ?>
</head>
<body>
<center>
	<form action="save_sewa.php" method="post">
		<table cellpadding="3" cellspacing="0">
   		<tr>
    		<td>Nama</td><td>:</td>
    		<td>
          <select name="nama">
            <?php
            $query = mysqli_query($con,"SELECT * FROM pengunjung");
            foreach ($query as $x) {
          ?>
            <option value="<?php echo $x['nama'];?>"><?php echo $x['nama'];?></option>
          <?php }?>  
          </select>
        </td>
   		</tr>
   		<tr>
    		<td>Nomor Kamar</td><td>:</td>
        <td>
          <select name="nomor_kamar">
            <?php
            $query2 = mysqli_query($con,"SELECT * FROM kamar");
            foreach ($query2 as $y) {
          ?>
            <option value="<?php echo $y['nomor_kamar'];?>"><?php echo $y['nomor_kamar'];?></option>
          <?php }?>  
          </select>  
        </td>
    		

   		</tr>
   		<tr>
    		<td>hari</td><td>:</td>
    		<td><input type="text" name="hari" required></td>
   		</tr>
   		<tr>
    		<td>&nbsp;</td>
    		<td></td>
    		<td><input type="submit" name="add" value="Save">	
   		</tr>
  		</table>
  	</form>	
</center>

</body>
</html>