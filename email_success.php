<?php

/**
	***************************************************************************
	**	Strona potwierdzenia wysłania wiadomości. Projekt wykonany w Bootsrap 4
	***************************************************************************
	**
	**	1. Załadowanie nagłówka z pliku header.php
	**	2. Wyświetlenie treści potwierdzenia wysłania wiadomości
	**	3. Załadowanie stopki z pliku footer.php
	**
	**************************************************************************
*/

	// Załadowanie nagłówka strony
	require ("header.php");
?>

		<!-- Potwierdzenie wysłania wiadomości -->
		<section class="introduction">
			<h2 class="text-center text-uppercase text-success introduction-header">Twoja wiadomość została wysłana...</h2>
		</section>

<?php
	// Załadowanie stopki strony
	require ("footer.php");
?>