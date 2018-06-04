<!DOCTYPE html>
<html>
<head>
	<title></title>
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
</br></br></br></br></br></br></br></br></br></br></br></br></br>
<center>
	<form action="save_kamar.php" method="post">
		<table cellpadding="3" cellspacing="0">
   		<tr>
    		<td>No Kamar</td><td>:</td>
    		<td><input type="text" name="No_kamar" required></td>
   		</tr>
   		<tr>
    		<td>Type</td><td>:</td>
    		<td><input type="text" name="type" required></td>
   		</tr>
   		<tr>
    		<td>Harga</td><td>:</td>
    		<td><input type="text" name="harga" required></td>
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