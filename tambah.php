<?php 
session_start();

if(!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'function.php';

//koneksi ke DBMS
$conn = mysqli_connect("localhost","root","","phpryan");

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"]) ) {
	

//cek apakah data berhasil ditambahkan atau tidak
if(tambah($_POST) > 0) {
	echo "
		<script>
			alert('BERHASIL DITAMBAHKAN !!');
			document.location.href = 'index.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('GAGAL DITAMBAHKAN !!');
			document.location.href = 'index.php';
		</script>
	";

	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah data siswa</title>
</head>
<body>
<h1>Tambah data siswa</h1>

<form action="" method="post" enctype="multipart/form-data">
	<ul>
		<li>
			<label for="nrp">NRP : </label>
			<input type="text" name="nrp" id="nrp">
		</li>

		<li>
			<label for="nama">NAMA : </label>
			<input type="text" name="nama" id="nama" required>
		</li>

		<li>
			<label for="email">EMAIL : </label>
			<input type="text" name="email" id="email">
		</li>

		<li>
			<label for="jurusan">JURUSAN : </label>
			<input type="text" name="jurusan" id="jurusan">
		</li>

		<li>
			<label for="gambar">GAMBAR : </label>
			<input type="file" name="gambar" id="gambar">
		</li>

		<li>
			<button type="submit" name="submit">TAMBAH DATA :v</button>
		</li>
	</ul>
	
</form>

</body>
</html>