<?php 
session_start();

if(!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'function.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
	echo "
		<script>
			alert('BERHASIL DIHAPUS !!');
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

 ?>