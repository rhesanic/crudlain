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


    $query = 'SELECT * From anggota';
    $result = mysqli_query($conn, $query);

    echo '<table class="table table-striped">';
    echo '<tr>';
    echo '<th>nama</th> <th>alamat</th> <th>email</th> <th>aksi</th>';
    echo '</tr>';
  
    while($anggota_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$anggota_data['nama']."</td>";
        echo "<td>".$anggota_data['alamat']."</td>";
        echo "<td>".$anggota_data['email']."</td>";    
        echo "<td><a href='ubah.php?id=$anggota_data[id]'>ubah</a> | <a href='hapus.php?id=$anggota_data[id]'>hapus</a></td></tr>";        
    }

    echo '</table>';
	echo '<br/><br/><a href="tambah.php">tambah anggota</a>';
    /* Libération du jeu de résultats */
    $result->close();

    mysqli_close($conn);

    ?>
    </div>
</body>
</html>
