<html>
 <head>
  <title>Hello...</title>

  <meta charset="utf-8"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
    <?php echo "<h1>Hi! I'm happy</h1>"; ?>

    <?php

    $conn = mysqli_connect('db', 'user', 'test', "myDb");


    
	if(isset($_POST['update']))
	{	
	$id = $_POST['id'];
	
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	
	$query = 'update anggota set nama=$nama,email=$email,alamat=$alamat WHERE id=$id';
    $result = mysqli_query($conn, $query);	

	header("Location: index.php");
	}
	$id = $_GET['id'];
 
	$query = 'SELECT * From anggota where id=$id';
    $result = mysqli_query($conn, $query);
	 
	while($anggota_data = mysqli_fetch_array($result)) { 
		$nama = $anggota_data['nama'];
		$email = $anggota_data['email'];
		$alamat = $anggota_data['alamat'];
	}
	?>
    <a href="index.php">Home</a>
	<br/><br/>
	
	<form nama="update_anggota" method="post" action="ubah.php">
		<table border="0">
			<tr> 
				<td>nama</td>
				<td><input type="text" nama="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" nama="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>alamat</td>
				<td><input type="text" nama="alamat" value=<?php echo $alamat;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" nama="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" nama="update" value="Update"></td>
			</tr>
		</table>
	</form>

    </div>
</body>
</html>
