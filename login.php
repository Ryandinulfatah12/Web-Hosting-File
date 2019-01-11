<?php 
session_start();
require 'function.php';
//cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	//ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	//cek cookie dan username
	if($key === hash('sha256', $row['username']) ){
		$_SESSION['login'] = true;
	}


	if(isset($_SESSION["login"])) {
		header("Location: index.php");
		exit;
	}

}


if(isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	//cek username
	if(mysqli_num_rows($result) === 1 ) {

		//cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])) {
			//set session
			$_SESSION["login"] = true;

			//cek remember me
			if(isset($_POST['remember'])) {
				//buat cookie

				setcookie('id', $row['id'], time() + 60);
				setcookie('key', hash('sha256', $row['username']), time() +60);
			}


			header("Location: index.php");
			exit;
		}

	}

	$error = true;


}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<style>

	body {
		margin: 0;
		padding: 0;
		background: url(img/pola6.png);
		background-size: cover;
		font-family: arial;
	}

	.login {
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

<div class="login">
	<h1>Silahkan Login</h1>
</div>

<div class="LoginBox">
	<img src="img/logo.png" class="user">
	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username :</label>
				<input type="text" name="username" id="username">
			</li>

			<li>
				<label for="password">Password :</label>
				<input type="password" name="password" id="password">
			</li>

			<li>
					<label for="remember">Remember Me :</label>
					<input type="checkbox" name="remember" id="remember">
			</li>

			<li>
				<button type="submit" name="login">Login!</button>
			</li>
		</ul>

	<p> <a href="registrasi.php">Belum Daftar?</a> </p>	

	<?php if(isset($error) ) : ?>
		<p style="color: red; font-style: italic;">username/password salah!!!</p>
	<?php endif; ?>

	</form>
</div>

</body>
</html>