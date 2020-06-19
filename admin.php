<?php
	require 'Function/functions.php';

	$nama_admin = $_GET["nama_admin"];

	$calonsiswa = query("SELECT * FROM calonsiswa ORDER BY id");
	// $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$nama_admin'");
	// $row = mysqli_fetch_assoc($result);
	// $nama_admin = $row["nama"];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="Style/bootstrap/css/bootstrap.min.css">
	<style>
		.clear{
			clear: both;
		}
		#baseheader{
			background: DarkGray;
		}
		#header{
			float: left;
			background: DarkGray;
			font-size: 200%;
			padding: 1%;
		}
		#header2{
			float: right;
			background: DimGray;
			font-size: 200%;
			padding: 1%;
		}
		#header2:hover{
			background-color: black;
			text-decoration: underline;
			font-size: 205%;
		}
		table{
			width: 100%;
		}
		th{
			text-align: center;
		}
		td{
			text-align: center;
		}
		.btn{
			text-decoration: none;
		}
		img{
			width: 100px;
		}
	</style>
</head>
<body>
	<div id="baseheader">
		<div id="header">
			Data Pendaftaran
		</div>
		<div id="header2">
			<a href="index.php" style="color: Gainsboro;">
				Logout <?= $nama_admin; ?>
			</a>
		</div>
		<div class="clear"></div>
	</div>
	<br>
	<table border="1" cellspacing="0" >
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tempat Tanggal Lahir</th>
			<th>Warga Negara</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>Nomor HP</th>
			<th>Asal SMP</th>
			<th>Nama Ayah</th>
			<th>Nama Ibu</th>
			<th>Penghasilan Orang Tua</th>
			<th>Foto Siswa</th>
			<th>Action</th>
		</tr>

		<?php $nomor = 1; ?>
		<?php foreach ($calonsiswa as $row) : ?>
			<tr>
				<td><?= $nomor; ?></td>
				<td><?= $row["nama"]; ?></td>
				<td><?= $row["tempatlahir"] . ", " . $row["tanggallahir"]; ?></td>
				<td><?= $row["warganegara"]; ?></td>
				<td><?= $row["alamat"]; ?></td>
				<td><?= $row["email"]; ?></td>
				<td><?= $row["nomorhp"]; ?></td>
				<td><?= $row["asalsmp"]; ?></td>
				<td><?= $row["namaayah"]; ?></td>
				<td><?= $row["namaibu"]; ?></td>
				<td>Rp<?= $row["penghasilanortu"]; ?></td>
				<td><img src="FotoSiswa/<?= $row["fotosiswa"]; ?>"></td>
				<td>
					<button class="btn-warning">
						<a class="btn" href="edit.php?id=<?= $row["id"]; ?>">Edit</a>
					</button>  
					<button class="btn-danger">
						<a  class="btn" href="Function/hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Hapus Data?')">Hapus</a>
					</button>
				</td>
			</tr>
			<?php $nomor++; ?>
		<?php endforeach; ?>
	</table>

</body>
</html>
