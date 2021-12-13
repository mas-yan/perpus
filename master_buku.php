<?php 
session_start();
if (isset($_SESSION['user'])) {
	if ($_SESSION['level'] != 'staff') {
		die ("anda bukan staff");
	}
 ?>
 <h1 align="center">form input data buku</h1>
 <table align="center" cellpadding="10" cellspacing="5">
 	<tr>
 		<td>
 			<input type="text" name=""></input>
 		</td>
 	</tr>
 </table>
 <?php 
}else{
	echo "<script>
	alert('anda belum login');
 	document.location='index.php';
 	</script>";
}

  ?>