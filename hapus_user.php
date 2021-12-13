<?php

//mengaktifkan sesi
session_start();
if (isset($_SESSION['user'])) {

	//jika user bukan admin
	if ($_SESSION['level'] != 'admin') {
		die ("anda bukan admin");
	}
	//koneksi
	include 'koneksi.php';

	//membuat fungsi
	function hapus($id){
		global $conn;

		mysqli_query($conn,"DELETE FROM user WHERE id = $id");

		return mysqli_affected_rows($conn);
	}

	//mengambil id dari url
	$id = $_GET['id'];

	if (hapus($id) > 0) {

		echo "<script>
	alert('user berhasil di hapus');
 	document.location='management.php';
 	</script>";

	}else{
		echo "<script>
	alert('user gagal di hapus');
 	document.location='management.php';
 	</script>";
	}
	
}else{
	echo "<script>
	alert('anda belum login');
 	document.location='index.php';
 	</script>";
}

  ?> 