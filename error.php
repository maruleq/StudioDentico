<?php

/**
	**********************************************************************************
	**	Strona informacji o błędzie wysłania wiadomości. Projekt wykonany w Bootsrap 4
	**********************************************************************************
	**
	**	1. Załadowanie nagłówka z pliku header.php
	**	2. Wyświetlenie treści informacji o błędzie wysłania wiadomości
	**	3. Załadowanie stopki z pliku footer.php
	**
	*********************************************************************************
*/

	// Załadowanie nagłówka strony
	require ("header.php");
?>

		<!-- Zgłoszenie błędu przy wysyłaniu wiadomości -->
		<section class="introduction">
			<h2 class ="text-center text-uppercase text-danger introduction-header">Wystpił problem z wysłaniem wiadomości...</h2>
		</section>

	


<?php
	// Załadowanie stopki strony
	require ("footer.php");
?>