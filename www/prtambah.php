<?php

    $conn = mysqli_connect('db', 'user', 'test', "myDb");
    
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
	
	$query = "insert into anggota (nama,email,alamat) values ('$nama','$email','$alamat')";
    $result = mysqli_query($conn, $query);	
	if(!$result){
								echo "Gagal Tambah Mobil!</br>";
								echo mysqli_error($conn);
								echo "<form action='tambah.html'>
										<input type='submit' onClick='self.history.back()' value='Kembali' />
										</form>";
										}else {
								echo "Berhasil Tambah Mobil!</br>";
								echo "silahkan <a href='index.php'>index</a>";	
								}
	
?>