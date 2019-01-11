<?php 

session_start();

if(!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'function.php';
$siswa = query("SELECT * FROM siswa");

//jika tombol cari  diklik
if( isset($_POST["cari"]) ) {
	$siswa = cari($_POST["keyword"]);
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Require meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Halaman Admin</title>
	<style>

	body {
		
	}	

	.DaftarSiswa h1 {
		color: blue;
		text-align: center;
		font-style: arial;
		width: 100%;
		white-space: nowrap;
		overflow: hidden;
		-webkit-animation : typing 5s steps(70, end);
		animation: animasi-ketik 5s steps(70, end);
	}

	@keyframes animasi-ketik {
		from { width: 0; }
	}

	@-webkit-keyframes animasi-ketik {
		from { width: 0; }
	}

	.dropdown {
		position: relative;
		display: inline-block;
		margin-left: 100px;
	}
	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f8f8;
		min-width: 160px;
		box-shadow: 0px 9px 15px 1px rgba(0, 0, 0 0.3);
	}
	.dropdown-content a {
		color: black;
		padding: 13px 14px;
		text-decoration: none;
		display: block;
	}
	.dropdown-content a:hover {
		background-color: #f1f2f2;
	}
	.dropdown:hover .dropdown-content {
		display: block;
	}
	.dropdown:hover .dropdownbutton {
		background-color: #3e8ff3;
	}
	.dropdownbutton {
		background-color: #4cbf48;
		color: white;
		padding: 15px;
		border: none;
	}

	.table {
		font-family: sans-serif;
		color: #232323;
		border-collapse: collapse;

	}

	.table, th, td {
		border: 1px solid #999;
		padding: 8px 20px;
	}	

	.loader {
		width: 100px;
		position: absolute;
		top: 160px;
		left: 350px;
		z-index: -1;
		display: none;
	}

	.tambahsiswa {
		border: 1px solid blue;
		width: 125px;
		border-radius: 10px;
	}

	.tambahsiswa a:hover {
		background-color: lightgreen;
	}

	.container {
		width: 700px;
		margin-left: 100px;
	}

	.pencarian {
		margin-left: 100px;
	}

	.footer {
		overflow: hidden;
		text-align: center;
		color: #5f9ea0;
	}

	ul {
		background-color: lightblue;
	}

	.footer col {
		width: 32px;
		display: inline-block;
		padding: 1% 0;
		text-align: center;
	}
	</style>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	
<div class="DaftarSiswa">
	<h1>Daftar Siswa</h1>
</div>

<div class="logout">
<a href="logout.php">Log out Kuy</a>
</div>
<br>
<div class="tambahsiswa">
	<a href="tambah.php">Tambah Data Siswa</a>
</div>

<br><br>

<form action="" method="post" enctype="multipart/from-data">

<div class="pencarian">	
	<input type="text" name="keyword" size="40" autofocus placeholder="Masukan Keyword Pencarian..." autocomplete="off" id="keyword">
	<button type="submit" name="cari" id="tombol-cari">Cari !!</button>

	<img src="img/loader.gif" class="loader">
</div>

</form>

<br>

<div class="container" id="container">

	<table class="table" border="2" cellpadding="10" cellspacing="0" align="center">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach( $siswa as $row) : ?>

		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin nih ?');">hapus</a>
			</td>

			<td><img src="img/<?= $row["gambar"]; ?>" width="50">
			</td>
			<td><?= $row["nrp"] ?></td>
			<td><?= $row["nama"] ?></td>
			<td><?= $row["email"] ?></td>
			<td><?= $row["jurusan"] ?></td>
		</tr>

	<?php $i++; ?>
	<?php endforeach; ?>

	</table>
	
</div>

<br>
<div class="dropdown">
		<button class="dropdownbutton">Lainnya...</button>
			<div class="dropdown-content">
				<a href="registrasi.php" target="_blank">Daftar</a>
				<a href="about.php" target="_blank">Tentang Kami</a>
			</div>
</div>

<div class="footer">
	<footer id="footer">
		<div class="col">
			<h2>Information</h2>
				<ul>
					<li><a href="#">&copy; Copyright. Ryan Website. 2018</a></li>
				</ul>
		</div>
		
	</footer>
</div>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
</body>
</html>