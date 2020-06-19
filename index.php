<!DOCTYPE html>
<html>
<head>
	<title>PPDB JAKARTA - SMA</title>
	<link rel="stylesheet" href="Style/bootstrap/css/bootstrap.min.css">
	<style>
		body{
			margin: 0;
		}
		.clear{
			clear: both;
		}
		.base{
			width: 100%;
			background-image: "img/sekolah.jpg";
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
		#baseheader{
			background: DarkGray;
		}
		#gambar{
			float: left;
			background: black;
			height: 590px;
			width: 100px;
		}
		#daftar{
			width: 500px;
			height: 590px;
			background: LightSteelBlue;
			float: right;
		}
		#tomboldaftar{
			width: 70%;
			background-color: white;
			border : 3px solid red;
			text-align: center;
			border-radius: 10px;
			padding: 5%;
			margin: auto;
			margin-top: 50%;
			font-size: 170%;
		}
		#tomboldaftar:hover{
			background-color: white;
			border: 5px solid red;
			text-decoration: underline;
			font-size: 180%;
		}
		a{
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
	<div id="baseheader">
		<div id="header">
			Penerimaan Peserta Didik Baru SMA
		</div>
		<div id="header2">
			<a href="login.php" style="color: Gainsboro;">
				Login
			</a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="base">
		<div id="gambar">
			<img src="img/sekolah.jpg" style="height: 590px;">
		</div>
		<div id="daftar">
			<div id="tomboldaftar">
				<a href="daftarsiswa.php">
					Pendaftaran Siswa Baru
				</a>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>