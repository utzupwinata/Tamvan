<?php
	/*mysqli_connect()
		fungsi  : melakukan koneksi ke database
		@param 1: nama host = localhost
		@param 2: username = root
		@param 3: password 
		@param 4: nama database = tugaspraktik
	*/
	$conn = mysqli_connect("localhost", "root", "", "tugaspraktik");

	/*query()
		fungsi  : melakukan query ke database
		@param  : sintaks query-nya berupa string
		@return : array asosiatif berisi data dari tabel calonsiswa
	*/
	function query($query) {
		global $conn;

		/*mysqli_query()
			fungsi  : melakukan query ke database
			          - jika query berhasil = 1
			          - jika query gagal    = -1
			@param 1: koneksi database
			@param 2: sintaks query-nya (String)
			@return : data dalam tabel
		*/
		$result = mysqli_query($conn, $query);
		$rows = [];

		/*mysqli_fetch_assoc()
			fungsi	: mengambil data (satu baris) dalam tabel lalu disimpan dalam bentuk array asosiatif
			@param  : query menampilkan/mengambil data
		*/
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}

		return $rows;
	}

	/*daftarSiswa()
		fungsi  : menambahkan data baru pada tabel calon siswa
		@param  : data dalam form pada file daftarsiswa.php ($_POST)
		@return : perubahan pada tabel calonsiswa (affected rows)
	*/
	function daftarSiswa($data) {
		global $conn;

		# htmlspecialchars untuk merubah sintaks html menjadi karakter biasa
		$nama = htmlspecialchars($data["nama"]);
		$tempatlahir = htmlspecialchars($data["tempatlahir"]);
		$tanggallahir = $data["tanggallahir"];
		$warganegara = htmlspecialchars($data["warganegara"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$email = htmlspecialchars($data["email"]);
		$nomorhp = htmlspecialchars($data["nomorhp"]);
		$asalsmp = htmlspecialchars($data["asalsmp"]);
		$namaayah = htmlspecialchars($data["namaayah"]);
		$namaibu = htmlspecialchars($data["namaibu"]);
		$penghasilanortu = htmlspecialchars($data["penghasilanortu"]);

		# Upload Foto Siswa
		$fotosiswa = uploadFotoSiswa();
		if (!$fotosiswa) {
			return false;
		}

		$query = "INSERT INTO calonsiswa VALUES
					(
						'',
						'$nama',
						'$tempatlahir',
						'$tanggallahir',
						'$warganegara',
						'$alamat',
						'$email',
						'$nomorhp', 
						'$asalsmp',
						'$namaayah',
						'$namaibu',
						'$penghasilanortu',
						'$fotosiswa'
					)
				 ";

		mysqli_query($conn, $query);

		# Check data berhasil diinput atau tidak
		/*mysqli_affected_rows()
			fungsi : melihat perubahan terhadap sebuah tabel
			@param : koneksi database
		*/
		return mysqli_affected_rows($conn);
	}


	/*daftarSiswa()
		fungsi  : upload foto siswa ke storage dan database
		@return : nama foto siswa baru yang dibuat secara random
	*/
	function uploadFotoSiswa() {
		$namaFile = $_FILES["fotosiswa"]["name"];
		$ukuranFile = $_FILES["fotosiswa"]["size"];
		$error = $_FILES["fotosiswa"]["error"];
		$tmpStorage = $_FILES["fotosiswa"]["tmp_name"]; //lokasi penyimpanan foto siswa sementara

		# Check apakah tidak ada foto yang diupload
		if ($error === 4) {
			echo "
				<script>
					alert('Pilih Foto Siswa!');
				</script>
			";
			return false;
		}

		# Check ekstensi file yang diupload
		$ekstensiFotoValid = ["jpg", "jpeg", "png"];
		$ekstensiFotoSiswa = explode('.', $namaFile);
		$ekstensiFotoSiswa = strtolower(end($ekstensiFotoSiswa));

		if (!in_array($ekstensiFotoSiswa, $ekstensiFotoValid)) {
			echo "
				<script>
					alert('Mohon Upload File Foto (.jpg; .jpeg; .png) !');
				</script>
			";
			return false;
		}

		#Check ukuran foto
		if ($ukuranFile > 2000000) {
			echo "
				<script>
					alert('Ukuran Foto Terlalu Besar (Maksimal 2MB) !');
				</script>
			";
			return false;
		}

		# Generate nama file baru secara random
		$namaFileBaru = uniqid() . '.' . $ekstensiFotoSiswa;

		move_uploaded_file($tmpStorage, 'FotoSiswa/' . $namaFileBaru);

		return $namaFileBaru;
	}


	/*editDataSiswa()
		fungsi  : edit data berdasarkan id
		@param  : data dalam form pada file edit.php ($_POST)
		@return : perubahan pada tabel calonsiswa (affected rows)
	*/
	function editDataSiswa($data) {
		global $conn;

		$id = $data["id"];
		$nama = htmlspecialchars($data["nama"]);
		$tempatlahir = htmlspecialchars($data["tempatlahir"]);
		$tanggallahir = $data["tanggallahir"];
		$warganegara = htmlspecialchars($data["warganegara"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$email = htmlspecialchars($data["email"]);
		$nomorhp = htmlspecialchars($data["nomorhp"]);
		$asalsmp = htmlspecialchars($data["asalsmp"]);
		$namaayah = htmlspecialchars($data["namaayah"]);
		$namaibu = htmlspecialchars($data["namaibu"]);
		$penghasilanortu = htmlspecialchars($data["penghasilanortu"]);
		$fotolama = $data["fotolama"];

		if ($_FILES["fotosiswa"]["error"] === 4) {
			$fotosiswa = $fotolama;
		}
		else{
			$fotosiswa = uploadFotoSiswa();
		}
		

		$query = "UPDATE calonsiswa SET
					nama = '$nama',
					tempatlahir = '$tempatlahir',
					tanggallahir = '$tanggallahir',
					warganegara = '$warganegara',
					alamat = '$alamat',
					email = '$email',
					nomorhp = '$nomorhp', 
					asalsmp = '$asalsmp',
					namaayah = '$namaayah',
					namaibu = '$namaibu',
					penghasilanortu = '$penghasilanortu',
					fotosiswa = '$fotosiswa'
					WHERE id = $id
				 ";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}


	/*hapus()
		fungsi  : hapus data berdasarkan id dari tabel calonsiswa
		@param  : id calon siswa
		@return : perubahan pada tabel calonsiswa (affected rows)
	*/
	function hapusDataSiswa($id) {
		global $conn;

		$query = "DELETE FROM calonsiswa WHERE id = $id";
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}
?>