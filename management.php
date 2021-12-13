<?php
session_start();
if (isset($_SESSION['user'])) {
	if ($_SESSION['level'] != 'admin') {
		die ("anda bukan admin");
	}
	include 'koneksi.php';
	$qry = mysqli_query($conn,"SELECT * FROM user");
 ?>
<h1 align="center">management</h1>

<table align="center" cellpadding="10" cellspacing="0" border="1">
<h2 align="center">TOTAL : <?= mysqli_num_rows($qry); ?></h2>
<a href="tambah_user.php">tambah user</a>
	<thead>
		<tr>
			<th>nama</th>
			<th>username</th>
			<th>level</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
	<?php 
	while ($row = mysqli_fetch_assoc($qry)):?>
		<tr>
			<td><?= $row['nama']; ?></td>
			<td><?= $row['username']; ?></td>
			<td><?= $row['level'];?></td>
			<td><a href="hapus_user.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin ingin menghapus?')">hapus</a></td>
		</tr>
	</tbody>
<?php endwhile ?>
</table>

<a href="admin.php">kembali</a>
<?php 
}else{
	echo "<script>
	alert('anda belum login');
 	document.location='index.php';
 	</script>";
}

  ?> 