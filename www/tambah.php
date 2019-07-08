<html>
 <head>
  <title>nico</title>

  <meta charset="utf-8"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
    <?php echo "<h1>rhesanic</h1>"; ?>    
    <a href="index.php">Home</a>
	<br/><br/>
	
	<form nama="update_anggota" method="post" action="prtambah.php">
		<table width="25%" border="0">
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr> 
				<td></td>
				<td><button type="submit" class="btn btn-default">tambah</button></td>
			</tr>
		</table>
	</form>
	
    </div>
</body>
</html>
