<html>
 <head>
  <title>rhesa</title>

  <meta charset="utf-8"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
    

    <?php

    $conn = mysqli_connect('db', 'user', 'test', "myDb");
    
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
	
	$query = "insert into anggota (nama,email,alamat) values ('$nama','$email','$alamat')";
    $result = mysqli_query($conn, $query);	
	if(!$result){
								echo "Gagal Tambah Mobil!</br>";
								echo mysqli_error($conn);
								echo "<form action='form_dfakun.html'>
										<input type='submit' onClick='self.history.back()' value='Kembali' />
										</form>";
										}else {
								echo "Berhasil Tambah Mobil!</br>";
								echo "silahkan <a href='form_login.php'>login</a>";	
								}
	}
	
	?>
    <a href="index.php">Home</a>
	<br/><br/>
	
	<form nama="update_anggota" method="post" action="tambah.php">
		<table width="25%" border="0">
			<tr> 
				<td>nama</td>
				<td><input type="text" nama="nama"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" nama="email"></td>
			</tr>
			<tr> 
				<td>alamat</td>
				<td><input type="text" nama="alamat"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" nama="Submit" value="Submit"></td>
			</tr>
		</table>
	</form>
	
    </div>
</body>
</html>
