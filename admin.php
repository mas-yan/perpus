<?php 
session_start();
if (isset($_SESSION['user'])) {
	if ($_SESSION['level'] != 'admin') {
		die ("anda bukan admin");
	}
 ?>
 <h1 align="center"> halo <?= $_SESSION['nama']; ?> anda telah login sebagai <?= $_SESSION['level']; ?></h1>
 <a href="management.php">management</a></br>
 <a href="logout.php" onclick="return confirm('yakin ingin keluar?')">keluar</a>
<?php 
}else{
	echo "<script>
	alert('anda belum login');
 	document.location='index.php';
 	</script>";
}

  ?>