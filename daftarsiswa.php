<?php
	require 'Function/functions.php';

	if (isset($_POST["submit"])) {

		if (daftarSiswa($_POST) > 0) {
			echo "
				<script>
					alert('Data Berhasil Didaftarkan!');
					document.location.href = 'index.php';
				</script>
			";
		}
		else{
			echo "
				<script>
					alert('Data Gagal Didaftarkan!');
				</script>
			";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Siswa Baru</title>
	<link rel="stylesheet" href="Style/bootstrap/css/bootstrap.min.css">
	<style>
		table{
			width: 100%;
		}
		.btn{
			text-decoration: none;
		}
		#header{
			background: DarkGray;
			font-size: 200%;
			padding: 1%;
		}
		#formdaftar{
			background: LightGray;
			width: 60%;
			padding: 3%;
			margin: auto;
			border-radius: 10px;
			border: 2px solid DarkGray;
		}
	</style>
</head>
<body>
	<div id="header">
		Pendaftaran Siswa Baru
	</div>
	<br>
	<div id="formdaftar">
 	<button class="btn-primary">
 		<a class="btn" href="index.php">Batal Daftar</a>
 	</button>
 	
 	<br>
 	<br>

 	<form action="" method="post" enctype="multipart/form-data">
 		<table border="0" cellspacing="0" cellpadding="4">
 			<tr>
 				<td><label for="nama">Nama</label></td>
 				<td> : </td>
 				<td><input type="text" name="nama" id="nama" required></td>
 			</tr>
 			<tr>
 				<td><label for="tempatlahir">Tempat Tanggal Lahir</label></td>
 				<td> : </td>
 				<td><input type="text" name="tempatlahir" id="tempatlahir" required>, <input type="date" name="tanggallahir" required></td>
 			</tr>
 			<tr>
 				<td><label for="warganegara">Warga Negara</label></td>
 				<td> : </td>
 				<td><input type="text" name="warganegara" id="warganegara" required></td>
 			</tr>
 			<tr>
 				<td><label for="alamat">Alamat</label></td>
 				<td> : </td>
 				<td><input type="text" name="alamat" id="alamat" required></td>
 			</tr>
 			<tr>
 				<td><label for="email">Email</label></td>
 				<td> : </td>
 				<td><input type="text" name="email" id="email" required></td>
 			</tr>
 			<tr>
 				<td><label for="nomorhp">Nomor HP</label></td>
 				<td> : </td>
 				<td><input type="text" name="nomorhp" id="nomorhp" required></td>
 			</tr>
 			<tr>
 				<td><label for="asalsmp">Asal SMP</label></td>
 				<td> : </td>
 				<td><input type="text" name="asalsmp" id="asalsmp" required></td>
 			</tr>
 			<tr>
 				<td><label for="namaayah">Nama Ayah</label></td>
 				<td> : </td>
 				<td><input type="text" name="namaayah" id="namaayah" required></td>
 			</tr>
 			<tr>
 				<td><label for="namaibu">Nama Ibu</label></td>
 				<td> : </td>
 				<td><input type="text" name="namaibu" id="namaibu" required></td>
 			</tr>
 			<tr>
 				<td><label for="penghasilanortu">Penghasilan Orang Tua</label></td>
 				<td> : </td>
 				<td>Rp <input type="text" name="penghasilanortu" id="penghasilanortu" required></td>
 			</tr>
 			<tr>
 				<td><label for="fotosiswa">Foto Siswa</label></td>
 				<td> : </td>
 				<td><input type="file" name="fotosiswa" id="fotosiswa" required></td>
 			</tr>
 			<tr>
 				<td colspan="3" style="text-align: center; padding-top: 5%;">
 					<button class="btn-success" type="submit" name="submit">Daftar</button>
 				</td>
 			</tr>
 		</table>
 	</form>
 	</div>
</body>
</html>