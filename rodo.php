<?php

/**
	*****************************************************************
	**	Strona informacji o Polityce prywatności. Projekt wykonany w Bootsrap 4
	*****************************************************************
	**
	**	1. Załadowanie sekcji head z osobnego pliku
	**	2. Załadowanie górnego menu
	**	3. Załadowanie nagłówka z pliku header.php
	**	4. Wyświetlenie treści strony "Polityka prywatności"
	**	5. Załadowanie stopki z pliku footer.php
	**
	*****************************************************************
*/

	require ("sekcja_head.php");
	require ("top_menu.php");
	require ("header.php");
?>

		<!-- Treść dokumentu Polityka prywatności -->
		<section class="introduction">
			<h2 class="text-center text-uppercase introduction-header">Polityka prywatności</h2>
			<div class="container introduction-about">
				<span>
					<b><center>Szanowni Pacjenci!</center></b><br>Mając na uwadze, że od dnia 25 maja 2018 roku obowiązuje Rozporządzenie Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016r.  w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE znane szerzej pod nazwą GDPR (RODO)<br><br><b><center>CENTRUM STOMATOLOGII ESTETYCZNEJ STUDIO DENTICO</center></b><br>44-230 Bełk ul. Palowicka 2  nazwane dalej Administratorem, dla spełnienia obowiązku informacyjnego określonego w art.12 (Rozdział III) tego Rozporządzenia informuje niniejszym, że stosuje następującą politykę prywatności w odniesieniu do Państwa danych osobowych:<br><br>
					<ol>
						<li>Administratorem Pani/Pana danych osobowych jest Centrum Stomatologii Estetycznej Studio Dentico.</li>
						<li>Administrator wykorzystuje Państwa dane wyłącznie w celu prowadzenia dokumentacji medycznej oraz rozliczeń z instytucjami ubezpieczeniowymi.</li>
						<li>Administrator gwarantuje poufność wszelkich przekazanych mu danych osobowych.</li>
						<li>Podanie danych jest zawsze dobrowolne, ale niezbędne do podjęcia świadczenia usługi przez Administratora.</li>
						<li>Administrator nie udostępnia przekazanych mu danych jakimkolwiek podmiotom trzecim.</li>
						<li>Dane są przechowywane przez czas niezbędny dla prowadzenia dla prawidłowego udostępniania informacji.</li>
						<li>Dane osobowe są gromadzone z należytą starannością i odpowiednio chronione przed dostępem do nich przez osoby do tego nieupoważnione.</li>
					</ol>
					<center>Przysługują Pani/Panu następujące uprawnienia:</center><br>
					<ul>
						<li>Prawo do żądania dostępu do swoich danych, ich sprostowania, usunięcia lub ograniczenia przetwarzania</li>
						<li>Prawo do wzniesienia sprzeciwu wobec przetwarzania</li>
						<li>Prawo do przenoszenia danych</li>
						<li>Prawo do cofnięcia zgody na przetwarzanie danych osobowych w określonym celu, jeśli Państwo taką zgodę wyrazili</li>
						<li>Prawo do wniesienia skargi do organu nadzorczego w związku z przetwarzaniem danych osobowych przez Administratora.</li>
					</ul>
				</span>
			</div>
		</section>

<?php

	// Załadowanie stopki strony
	include ("footer.php");

?>