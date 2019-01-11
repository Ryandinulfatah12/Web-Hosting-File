<?php 
require 'function.php';

if(isset($_POST["register"])) {

	if(registrasi($_POST) > 0) {
		echo "<script>
				alert ('user baru berhasil ditambahkan!');
			</script>";
	} else {
		echo mysqli_error($conn);
	}
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<style>
		body {
		margin: 0;
		padding: 0;
		background: url(img/pola6.png);
		background-size: cover;
		font-family: arial;
		}

		.registrasi {
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

		label {
			display: block;
		}

	.LoginBox {
		position: absolute;
		top: 65%;
		left: 50%;
		transform: translate(-50%,-50%);
		width: 350px;
		height: 420px;
		padding: 80px 40px;
		box-sizing: border-box;
		background: rgba(0,0,0,.5);
	}

	.user {
		width: 100px;
		height: 100px;
		border-radius: 50%;
		overflow: hidden;
		position: absolute;
		top: calc(-100px/2);
		left: calc(50% - 50px);
	}

	.LoginBox p {
		margin: 0;
		padding: 0;
		font-weight: bold;
		color: #fff;
	}

	.LoginBox input {
		
		margin-bottom: 20px;
	}
	.LoginBox input[type="text"],
	.LoginBox input[type="password"]

	{
		border: none;
		border-bottom: 1px solid #fff;
		background: transparent;
		color: #fff;
		font-size: 16px;
	}

	.LoginBox {
		color: #fff;
		font-size: 14px;
		font-weight: bold;
		text-decoration: none;
		border-radius: 50px;
	}

	.LoginBox input[type="submit"]
	{
		border: none;
		outline: none;
		color: #fff;
		font-size: 16px;
		background: #ff267e;
		cursor: pointer;
		border-radius: 20px;
	}
	.LoginBox input[type="submit"]:hover
	{
		background: #efed40
		color: #262626;
	}

	</style>
</head>
<body>

<div class="registrasi">
	<h1>Silahkan Registrasi</h1>
</div>

<div class="LoginBox">
	<img src="img/logo2.png" class="user">
	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username   :</label>
				<input type="text" name="username" id="username">
			</li>
			<br>
			<li>
				<label for="password">Password   :</label>
				<input type="password" name="password" id="password">
			</li>
			<br>	
			<li>
				<label for="password2">Konfirmasi Password   :</label>
				<input type="password" name="password2" id="password2">
			</li>
			<br>
			<li>
				<button type="submit" name="register">Register!</button>
			</li>
		</ul>

		<p> <a href="login.php">Klik Ini Untuk Login</a> </p>

	</form>
</div>
</body>
</html>