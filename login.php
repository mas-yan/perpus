<?php 
//mengaktifkan sesi
session_start();

//memanggil koneksi
include 'koneksi.php';

//mengambil data dari form
$user = $_POST['user'];
$pass = $_POST['pass'];

//menangkap data g dimasukkan
$qry = mysqli_query($conn,"SELECT * FROM user WHERE username = '$user' AND password = '$pass' ");

$cek = mysqli_num_rows($qry);

//cek apakah data yg dimasukkan benar
if ($cek > 0) {
	$data = mysqli_fetch_assoc($qry);
	$_SESSION['nama'] = $data['nama'];

//jika user login sebagai admin
	if ($data['level'] == 'admin') {

		$_SESSION['user'] = $user;
		$_SESSION['level'] = 'admin';

		//mengalihkan ke halaman admin
		header("location:admin.php");

//jika user login sebagai staff
	}elseif ($data['level'] == 'staff') {

		$_SESSION['user'] = $user;
		$_SESSION['level'] = 'staff';

//alihkan ke halaman staff
		header("location:staff.php");
	}else{
		echo "level salah";
	}
	//jika data salah
}else{
	echo "data yg anda masukkan salah";
}

 ?>