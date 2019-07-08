<?php echo "<h1>rhesanic</h1>"; ?>
<?php

    $conn = mysqli_connect('db', 'user', 'test', "myDb");
	
	$id = $_POST['id'];
	
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	
	$query = "update anggota set nama='$nama',email='$email',alamat='$alamat' WHERE id='$id'";
    $result = mysqli_query($conn, $query);	
	if(!$result){
								echo "Gagal update data!</br>";
								echo mysqli_error($conn);
								echo "<form action='ubah.php'>
										<input type='submit' onClick='self.history.back()' value='Kembali' />
										</form>";
										}else {
								echo "Berhasil update data!</br>";
								echo "silahkan <a href='index.php'>index</a>";	
								}

?>