<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<h1 align="center">login</h1>
	<form action="login.php" method="post">
		<table align="center" cellspacing="5" cellpadding="10">
			<tr>
				<td>
					<label for="user">Username</label>
				</td>
				<td>
					<input type="text" name="user" id="user" placeholder="masukkan username anda" required="required"></input>
				</td>
			</tr>
			<tr>
				<td>
					<label for="pass">Password</label>
				</td>
				<td>
					<input type="password" name="pass" id="pass" placeholder="masukkan password anda" required="required"></input>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="masuk" value="Login"></input>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>