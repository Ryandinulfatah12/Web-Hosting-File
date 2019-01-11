<?php 
session_start();

if(!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'function.php';

//ambil data di url
$id = $_GET["id"];

//query dta siswa berdasarkan id
$sw = query("SELECT * FROM siswa WHERE id = $id")[0];

//koneksi ke DBMS
$conn = mysqli_connect("localhost","root","","phpryan");

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"]) ) {
	

	

//cek apakah data berhasil diubah atau tidak
if(ubah($_POST) > 0) {
	echo "
		<script>
			alert('BERHASIL DIUBAH !!');
			document.location.href = 'index.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('GAGAL DIUBAH !!');
			document.location.href = 'index.php';
		</script>
	";

	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah data siswa</title>
</head>
<body>
<h1>Ubah data siswa</h1>

<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?= $sw["id"]; ?>" >
	<input type="hidden" name="gambarLama" value="<?= $sw["gambar"]; ?>" >
	<ul>
		<li>
			<label for="nrp">NRP : </label>
			<input type="text" name="nrp" id="nrp" required value="<?= $sw["nrp"]; ?>">
		</li>

		<li>
			<label for="nama">NAMA : </label>
			<input type="text" name="nama" id="nama" required value="<?= $sw["nama"]; ?>">
		</li>

		<li>
			<label for="email">EMAIL : </label>
			<input type="text" name="email" id="email" value="<?= $sw["email"]; ?>">

		</li>

		<li>
			<label for="jurusan">JURUSAN : </label>
			<input type="text" name="jurusan" id="jurusan" value="<?= $sw["jurusan"]; ?>">>
		</li>

		<li>
			<label for="gambar">GAMBAR : </label><br>
			<img src="img/<?= $sw['gambar']; ?>" width="40"><br>
			<input type="file" name="gambar" id="gambar">
			
		</li>

		<li>
			<button type="submit" name="submit">UBAH DATA :v</button>
		</li>
	</ul>
	
</form>

</body>
</html>