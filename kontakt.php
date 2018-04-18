<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Studio Dentico - Stomatologia, Ortodoncja, Endodoncja, Protetyka</title>

		<meta name="robots" content="index,follow"/>
		<meta name="revisit-after" content="2 days" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="keywords" content="Studio Dentico, stomatologia, ortodoncja, endodoncja, profilaktyka, leczenie, Bełk, gabinet stomatologiczny, Czerwionka-Leszczyny, Orzesze, Palowice, Stanowice" />
		<meta name="description" content="Centrum Stomatologii Estetycznej - Profesjonalna opieka, wyjątkowa amosfera sprawiają, że wizyta w Studio Dentico to znacznie więcej niż tylko odwiedzenie gabinetu stomatologicznego. Cechuje nas dbałość o jakość i indywidualne podejście do  pacjenta." />
		
		<link rel="stylesheet" href="style/bootstrap.min.css">
		<link rel="stylesheet" href="style/font-awesome.min.css">
		<link rel="stylesheet" href="style/custom.css">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114719809-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-114719809-1');
		</script>
	</head>

	<body>
		<!-- Pasek górnego menu -->
		<nav class="navbar navbar-dark navbar-expand-md bg-primary">
			<div class="container">
				<a href="index.php" class="navbar-brand"><img src="images/logo.png" alt="logo"></a>
				<!-- Przycisk menu aktywny na małych urzdzeniach -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Górne menu umieszczone na pasku z podświetlonym aktualnym linkiem -->
				<div class="collapse navbar-collapse" id="navContent">
					<div class="navbar-nav">
						<a href="index.php" class="nav-item nav-link">Start</a>
						<a href="kontakt.php" class="nav-item nav-link active">Kontakt</a>
					</div>
				</div>
			</div>
		</nav>

		<!-- Nagłówek: tekst + obraz + link do strony informacyjnej -->
		<div class="jumbotron jumbotron-fluid text-white text-center top">
			<div class="container">
				<h1 class="text-uppercase top-header">Odkryj nową jakość stomatologii</h1>
				<p class="top-text">Studio Dentico to znacznie więcej niż tylko wizyta w gabinecie stomatologicznym...</p>
				<a href="about.php" class="btn btn-primary active text-white top-button" role="button" aria-pressed="true">O nas</a>
			</div>
		</div>


<?php
	
	// Załadowanie stopki strony
	require ("footer.php");
?>