<?php

/**
	*********************************************************************
	**	Strona informacji "O nas". Projekt wykonany w Bootsrap 4
	*********************************************************************
	**
	**	1. Załadowanie sekcji head z osobnego pliku
	**	2. Załadowanie górnego menu
	**	3. Załadowanie nagłówka z pliku header.php
	**	4. Wyświetlenie treści strony "O nas"
	**	5. Załadowanie stopki z pliku footer.php
	**
	*********************************************************************
*/

	require ("sekcja_head.php");
	require ("top_menu_about.php");
	require ("header.php");
?>

		<!-- Informacja "O nas" -->
		<section class="introduction">
			<h2 class="text-center text-uppercase introduction-header">O nas...</h2>
			<div class="container text-center introduction-about">
				<span>Studio Dentico to wyjątkowe miejsce. Troszczymy się o to, aby każdy pacjent czuł się tutaj komfortowo i bezpiecznie. Profesjonalna opieka, wyjątkowa amosfera sprawiają, że wizyta w Studio Dentico to znacznie więcej niż tylko odwiedzenie gabinetu stomatologicznego. Tworzymy ekipę profesjonalistów i pasjonatów swojego zawodu. Zawsze oferujemy naszym pacjentom dokładną, nowoczesną i przyjazną stomatologię. Dbałość o jakość, indywidualne podejście i Państwa czas to nasze priorytety.</span>
			</div>
		</section>

<?php

// 	Załadowanie stopki strony
	include ("footer.php");

?>