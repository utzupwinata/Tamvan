<?php
	require 'Function/functions.php';

	$id = $_GET["id"];

	# Ambil data mahasiswa berdasarkan id (Query)
	$clnsiswa = query("SELECT * FROM calonsiswa WHERE id = $id")[0];

	if (isset($_POST["submit"])) {
		if (editDataSiswa($_POST) > 0) {
			echo "
				<script>
					alert('Data Berhasil Diedit!');
					document.location.href = 'admin.php';
				</script>
			";
		}
		else{
			echo "
				<script>
					alert('Data Gagal Diedit!');
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
		img{
			width: 100px;
		}
		#header{
			background: DarkGray;
			font-size: 200%;
			padding: 1%;
		}
		#formedit{
			background: LightGray;
			width: 58%;
			padding: 4%;
			margin: auto;
			border-radius: 10px;
			border: 2px solid DarkGray;
		}
	</style>
</head>
<body>
	<div id="header">
		Edit Data Calon Siswa
	</div>
	<br>
 	<div id="formedit">
 	<button class="btn-primary">
 		<a class="btn" href="admin.php">Batal Edit Data</a>
 	</button>
 	
 	<br>
 	<br>

 	<form action="" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id" value="<?= $clnsiswa["id"]; ?>">
 		<input type="hidden" name="fotolama" value="<?= $clnsiswa["fotosiswa"]; ?>">
 		<table border="0" cellspacing="0" cellpadding="4">
 			<tr>
 				<td><label for="nama">Nama</label></td>
 				<td> : </td>
 				<td><input type="text" name="nama" id="nama" value="<?= $clnsiswa["nama"]; ?>"></td>
 			</tr>
 			<tr>
 				<td><label for="tempatlahir">Tempat Tanggal Lahir</label></td>
 				<td> : </td>
 				<td>
 					<input type="text" name="tempatlahir" id="tempatlahir" value="<?= $clnsiswa["tempatlahir"]; ?>">, 
 					<input type="date" name="tanggallahir" value="<?= $clnsiswa["tanggallahir"]; ?>">
 				</td>
 			</tr>
 			<tr>
 				<td><label for="warganegara">Warga Negara</label></td>
 				<td> : </td>
 				<td><input type="text" name="warganegara" id="warganegara" value="<?= $clnsiswa["warganegara"]; ?>"></td>
 			</tr>
 			<tr>
 				<td><label for="alamat">Alamat</label></td>
 				<td> : </td>
 				<td><input type="text" name="alamat" id="alamat" value="<?= $clnsiswa["alamat"]; ?>"></td>
 			</tr>
 			<tr>
 				<td><label for="email">Email</label></td>
 				<td> : </td>
 				<td><input type="text" name="email" id="email" value="<?= $clnsiswa["email"]; ?>"></td>
 			</tr>
 			<tr>
 				<td><label for="nomorhp">Nomor HP</label></td>
 				<td> : </td>
 				<td><input type="text" name="nomorhp" id="nomorhp" value="<?= $clnsiswa["nomorhp"]; ?>"></td>
 			</tr>
 			<tr>
 				<td><label for="asalsmp">Asal SMP</label></td>
 				<td> : </td>
 				<td><input type="text" name="asalsmp" id="asalsmp" value="<?= $clnsiswa["asalsmp"]; ?>"></td>
 			</tr>
 			<tr>
 				<td><label for="namaayah">Nama Ayah</label></td>
 				<td> : </td>
 				<td><input type="text" name="namaayah" id="namaayah" value="<?= $clnsiswa["namaayah"]; ?>"></td>
 			</tr>
 			<tr>
 				<td><label for="namaibu">Nama Ibu</label></td>
 				<td> : </td>
 				<td><input type="text" name="namaibu" id="namaibu" value="<?= $clnsiswa["namaibu"]; ?>"></td>
 			</tr>
 			<tr>
 				<td><label for="penghasilanortu">Penghasilan Orang Tua</label></td>
 				<td> : </td>
 				<td>Rp <input type="text" name="penghasilanortu" id="penghasilanortu" value="<?= $clnsiswa["penghasilanortu"]; ?>"></td>
 			</tr>
 			<tr>
 				<td><label for="fotosiswa">Foto Siswa</label></td>
 				<td> : </td>
 				<td>
 					<img src="FotoSiswa/<?= $clnsiswa["fotosiswa"] ?>">
 					<br>
 					<br>
 					<input type="file" name="fotosiswa" id="fotosiswa">
 				</td>
 			</tr>
 			<tr>
 				<td colspan="3" style="text-align: center; padding-top: 6%;">
 					<button class="btn-success" type="submit" name="submit">Edit Data</button>
 				</td>
 			</tr>
 		</table>
 	</form>
 	</div>
</body>
</html>