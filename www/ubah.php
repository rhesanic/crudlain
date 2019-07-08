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

    <?php

    $conn = mysqli_connect('db', 'user', 'test', "myDb");
	
	$id = $_GET['id'];
 
	$query = "SELECT * From anggota where id='$id'";
    $result = mysqli_query($conn, $query);
	 
	while($anggota_data = mysqli_fetch_array($result)) { 
		$nama = $anggota_data['nama'];
		$email = $anggota_data['email'];
		$alamat = $anggota_data['alamat'];
	}
	?>
    <a href="index.php">Home</a>
	<br/><br/>
	
	<form nama="update_anggota" method="post" action="prubah.php">
		<table border="0">
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><button type="submit" class="btn btn-default">update</button></td>
			</tr>
		</table>
	</form>

    </div>
</body>
</html>
