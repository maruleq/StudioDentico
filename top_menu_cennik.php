<?php

/**
	*****************************************************************
	**	Górne menu strony "Cennik". Projekt wykonany w Bootsrap 4
	*****************************************************************
	**
	**
	*****************************************************************
*/
?>

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
						<a href="about.php" class="nav-item nav-link">O nas</a>
						<a href="cennik.php" class="nav-item nav-link active">Cennik</a>
						<a href="kontakt.php" class="nav-item nav-link">Kontakt</a>
					</div>
				</div>
			</div>
		</nav>
