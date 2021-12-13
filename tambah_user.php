<?php 
session_start();
if (isset($_SESSION['user'])) {
	if ($_SESSION['level'] != 'admin') {
		die ("anda bukan admin");
	}

	if (isset($_POST['tambah'])) {
		echo "<script>
	alert('user berhasil di tambahkan');
 	document.location='management.php';
 	</script>";

	include 'koneksi.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$nama = $_POST['nama'];
	$level = $_POST['level'];

	$qry = "INSERT INTO user VALUES
	        ('','$user','$pass','$nama','$level')";
	$sql = mysqli_query($conn,$qry);
}
 ?>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h1 align="center">tambah user</h1>
 	<form action="" method="post">
 		<table align="center" cellspacing="5" cellpadding="10">
 			<tr>
 				<td>
 					<label for="username">username</label>
 				</td>
 				<td>
 					<input type="text" name="username" id="username" title="username" required="required"></input>
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<label for="password">password</label>
 				</td>
 				<td>
 					<input type="text" name="password" id="password" title="password" required="required"></input>
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<label for="nama">nama</label>
 				</td>
 				<td>
 					<input type="text" name="nama" id="nama" title="nama" required="required"></input>
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<label for="level">level</label>
 				</td>
 				<td>
 					<select name="level" id="level" title="level">
 						<option value="admin">admin</option>
 						<option value="staff">staff</option>
 					</select>
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<input type="submit" name="tambah" value="tambah" title="tambah"></input>
 				</td>
 				<td>
 					<input type="reset" value="reset" title="reset"></input>
 				</td>
 			</tr>
 		</table>
 		<a href="management.php">kembali</a>
 	</form>
 </body>
 </html>
 <?php 
}else{
	echo "<script>
	alert('anda belum login');
 	document.location='index.php';
 	</script>";
}

  ?>