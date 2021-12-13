<?php 
session_start();
if (isset($_SESSION['user'])) {
	if ($_SESSION['level'] != 'staff') {
		die ("anda bukan staff");
	}
 ?>
 <h1 align="center"> halo <?= $_SESSION['nama']; ?> anda telah login sebagai <?= $_SESSION['level']; ?></h1>
 <ul>
 	<li>
 		<a href="master_buku.php">master buku</a>
 	</li>
 	</ul>
 	<ul>
 	<li>
 		<a href="data_buku.php">data buku</a>
 	</li>
 </ul>
 <ul>
 	<li>
 		<a href="buku_masuk.php">buku masuk</a>
 	</li>
 </ul>
 <a href="logout.php" onclick="return confirm('yakin ingin keluar?')">keluar</a>
<?php 
}else{
	echo "<script>
	alert('anda belum login');
 	document.location='index.php';
 	</script>";
}

  ?>