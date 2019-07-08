<?php echo "<h1>rhesanic</h1>"; ?>
<?php

    $conn = mysqli_connect('db', 'user', 'test', "myDb");
	
	$id = $_GET['id'];
 
	$query = "delete from anggota where id='$id'";
    $result = mysqli_query($conn, $query);
	if(!$result){
								echo "Gagal hapus data!</br>";
								echo mysqli_error($conn);
								echo "<form action='index.php'>
										<input type='submit' onClick='self.history.back()' value='Kembali' />
										</form>";
										}else {
								echo "Berhasil hapus data!</br>";
								echo "silahkan <a href='index.php'>index</a>";	
								}
?>