<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['jurusan']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>Selamat Datang</h1>
    
	<link rel="stylesheet" type="text/css" href="style.css">
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai mahasiswa jurusan <b><?php echo $_SESSION['jurusan']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
 
	<br/>
	<br/>
 </body>
</html>