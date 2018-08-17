<?php

/**
	**********************************************************************************
	**	Strona informacji o błędzie wysłania wiadomości. Projekt wykonany w Bootsrap 4
	**********************************************************************************
	**
	**	1. Załadowanie sekcji head z osobnego pliku
	**	2. Załadowanie górnego menu
	**	3. Załadowanie nagłówka z pliku header.php
	**	4. Wyświetlenie treści informacji o błędzie wysłania wiadomości
	**	5. Załadowanie stopki z pliku footer.php
	**
	*********************************************************************************
*/

	require ("sekcja_head.php");
	require ("top_menu.php");
	require ("header.php");
?>

		<!-- Zgłoszenie błędu przy wysyłaniu wiadomości -->
		<section class="introduction">
			<h2 class ="text-center text-uppercase text-danger introduction-header">Wystpił problem z wysłaniem wiadomości...</h2>
		</section>

<?php

	// Załadowanie stopki strony
	include ("footer.php");

?>