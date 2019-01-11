<!DOCTYPE html>
<html>
<head>
	<title>Tentang Kami</title>
	<style>

	body {
		background-image: url(img/pola6.png);
		font-family: arial;
	}


	.judul h1 {
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


	* {
		margin: 0;
		padding: 0;
		list-style: none;
		text-decoration: none;
	}

	.slide p {
		z-index: 10000;
		font-size: 70px;
		text-align: center;
		position: absolute;
		width: 20%;
		color: white;
		font-family: arial;
	}

	.slider {
		overflow: hidden;
		height: 350px;
	}

	.slider figure div {
		width: 20%;
		float: left;
	}

	.slider figure img {
		width: 100%;
		float: left;
		border-radius: 20px;
	}

	.slider figure {
		position: relative;
		width: 500%;
		margin: 0;
		left: 0;
		animation: 20s slidy infinite;
	}

	@keyframes slidy {
		0% {
			left: 0%;
		}
		10% {
			left: 0%;
		}
		12% {
			left: -100%;
		}
		22% {
			left: -100%;
		}
		24% {
			left: -200%;
		}
		34% {
			left: -200%;
		}
		36% {
			left: -300%;
		}
		46% {
			left: -300%;
		}
		48% {
			left: -400%;
		}
		58% {
			left: -400%;
		}
		60% {
			left: -300%;
		}
		70% {
			left: -300%;
		}
		72% {
			left: -300%;
		}
		82% {
			left: -200%;
		}
		84% {
			left: -100%;
		}
		94% {
			left: -100%;
		}
		96% {
			left: 0%;
		}
	}


	.container {
		background-size: cover; 
		width: 700px;
		border: none;
		margin: auto;
		padding: 5px;
		height: 290px;
		background-position: 0 -60px;
	}

	.content {
		background-image: url(img/pola4.png);
		background-size: cover; 
		width: 700px;
		border: none;
		margin: auto;
		padding: 5px;
		height: 290px;
		background-position: 0 -60px;
		border-radius: 20px;
	}

	.isi {
		width: 670px;
		box-sizing: border-box;
	}

	.paragraf-akhir {
		background-color: #ffe4e1;
	}

	.instagram img:hover {
		background-color: purple;
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
</head>
<body>

	<div class="container">
		<div class="judul"><h1>Tentang Kami</h1></div>
		<br>
		<p class="penulis">Ditulis oleh <strong>Ryan Dinul Fatah</strong> pada 7 November 2018</p>

		<div class="slider">
		<figure>
			<div class="slide">
				<img src="img/1.jpg">
			</div>

			<div class="slide">
				<img src="img/2.jpg">
			</div>

			<div class="slide">
				<img src="img/3.jpg">
			</div>

			<div class="slide">
				<img src="img/4.jpg">
			</div>
		</figure>
	</div>
	<div class="content">
		<div class="isi">
			<p>Website hasil akhir dari tugas PHP DASAR (PWBP) di SMKN 1 PADAHERANG.Dengan bantuan guru mapel,teman seperjuangan,dan kang Sandhika Galih yang sudah memberi tutorial seri PHP DASAR di youtube,di channel webprogrammingunpas.</p>
			<br>
			<p class="paragraf-3">Gambar di atas adalah seluruh anggota/member kelas XI RPL B Tahun pelajaran 2017/2018 :v

			<strong>#SMKN1PDH | #SMKBISA | #RPL</strong></p>
			<br>
			<br>
			<marquee><p>thanks for visit :v </p></marquee>
			<br>

		<div class="instagram">
			<a href="https://www.instagram.com/ryan_dinulfatah12/"> <img src="img/instagram.jpg" width="80px" alt="FOLLOW IG SAYA :v tidak maksa :v"> </a>
		</div>	

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

</body>
</html>