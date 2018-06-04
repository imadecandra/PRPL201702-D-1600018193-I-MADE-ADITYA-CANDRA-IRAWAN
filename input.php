<html>
<head><title></title>
    <meta>
		<title>Semut Hitam Hotel</title>
    <meta>
		<link rel="stylesheet" href="style.css" media="screen">
		<style type="text/css">
		body{
			background-image:url("depanhotel.jpg");
			background-size:cover;
		}
		</style>
</head>
<body>
<div id="art-main">
<div class="art-header clearfix">
    <div class="art-shapes">
			<h1 class="art-headline">
				<a href="#">Semut Hitam Hotel</a>
			</h1>
			<h2 class="art-slogan">Satu tekat satu tujuan</h2>
			<div class="art-bg"></div>
      </div>


<nav class="art-nav clearfix">
	
    <div class="art-nav-inner">
    <ul class="art-hmenu">
			<li><a href="index.html" class="active">Home</a></li>
			<li><a href="input.php">Data Tamu</a></li>
			<li><a href="kamar.php">Pesan Hotel</a></li></ul> 
        </div>
	
</nav>
</br></br></br></br></br></br></br></br></br></br><center>
	<h1>FORM Tamu</h1>
	
	<form action="save_tamu.php" method="post">
  		<table cellpadding="3" cellspacing="0">
   		<tr>
    		<td>ID Tamu</td><td>:</td>
    		<td><input type="text" name="id_tamu" required></td>
   		</tr>
   		<tr>
    		<td>Nama</td><td>:</td>
    		<td><input type="text" name="Nama_tamu" required></td>
   		</tr>
   		<tr>
    		<td>Alamat</td><td>:</td>
    		<td><input type="text" name="alamat" required></td>
   		</tr>
   		<tr>
    		<td>Tempat Tanggal Lahir</td><td>:</td>
    		<td><input type="text" name="ttl" required></td>
   		</tr>
   		<tr>
    		<td>No HP</td><td>:</td>
    		<td><input type="text" name="no_HP" required></td>
   		</tr>
   		<tr>
    		<td>&nbsp;</td>
    		<td></td>
    		<td><input type="submit" name="add" value="Save">		<input type="reset" value="Reset"></td>
   		</tr>
  		</table>
		
 	</form>
	</center>
</body>
</html>