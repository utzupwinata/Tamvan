<?php
	require 'Function/functions.php';

	if (isset($_POST["login"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		#Check username di tabel user
		$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

		# Check baris yang berisi username
		if (mysqli_num_rows($result) === 1) {

			# Check Password
			$row = mysqli_fetch_assoc($result);
			if ($password == $row["password"]) {
				$nama_admin = $row["nama"];
				header("Location: admin.php?nama_admin=$nama_admin");
				exit;
			}
		}

		$error = true;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Administrator</title>
	<link rel="stylesheet" href="Style/bootstrap/css/bootstrap.min.css">
	<style>
		#header{
			background: DarkGray;
			font-size: 200%;
			padding: 1%;
		}
		#loginbox{
			background: LightGray;
			width: 30%;
			margin: auto;
			margin-top: 6%;
			padding-top: 6%;
			padding-bottom: 5%;
			text-align: center;
			border-radius: 10px;
			border: 3px solid DarkGray;
		}
	</style>
</head>
<body>
	<div id="header">
		Login Administrator
	</div>
	<?php if (isset($error)) : ?>
		<br>
		<p style="color: red; font-style: italic;">Username atau passwor salah!</p>
	<?php endif; ?>
	<br>
	<div id="loginbox">
		<form action="" method="post">
			<table border="0" cellpadding="8" style="width: 100%;">
				<tr>
					<td><label for="username">Username</label></td>
					<td> : </td>
					<td><input type="text" name="username" id="username" autofocus></td>
				</tr>
				<tr>
					<td><label for="password">Password</label></td>
					<td> : </td>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<td colspan="3" style="text-align: center; padding-top: 15%;">
						<button class="btn-info" type="submit" name="login">Login</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>