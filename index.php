<?php

/**
	*********************************************************************
	**	Strona główna witryny. Projekt wykonany w Bootsrap 4
	*********************************************************************
	**
	**	1. Załadowanie nagłówka z pliku header.php
	**	2. Wyświetlenie treści strony startowej z formularzem kontaktowym
	**	3. Załadowanie stopki z pliku footer.php
	**
	*********************************************************************
*/

	// Załadowanie nagłówka strony
	require ("header.php");
?>

		<!-- Wprowadzenie na stronie startowej-->
		<section class="introduction">
			<h2 class="text-center text-uppercase introduction-header">Dbaj o zdrowie z profesjonalistami</h2>
			<br/>
			<div class="container">
				<div class="row">
					<div class="col-md"> <!-- Ikona nr 1 -->
						<div class="introduction-item text-center">
							<img src="images/tooth.png" alt="stomatologia - ortodoncja - endodoncja - protetyka">
							<h3 class="introduction-item-header">Leczenie</h3>
							<p>Stomatologia zajmuje się leczeniem chorób zębów, przyzębia i jamy ustnej. Leczenie to podstawowa działalność stomatologiczna, która ma na celu zachowanie własnych zębów pacjenta.</p>
						</div>
					</div>
					<div class="col-md"> <!-- Ikona nr 2 -->
						<div class="introduction-item text-center">
							<img src="images/dentist.png" alt="stomatologia - ortodoncja - endodoncja - protetyka">
							<h3 class="introduction-item-header">Profilaktyka</h3>
							<p>Profilaktyka stomatologiczna to wszelkie działania mające na celu zapobieganie powstawaniu chorób zębów i przyzębia. Głównym zadaniem profilaktyki jest walka z osadem, płytką nazębną - podstawową przyczyną rozwoju próchnicy i chorób przyzębia.</p>
						</div>
					</div>
					<div class="col-md"> <!-- Ikona nr 3 -->
						<div class="introduction-item text-center">
							<img src="images/dentdevice.png" alt="stomatologia - ortodoncja - endodoncja - protetyka">
							<h3 class="introduction-item-header">Ortodoncja</h3>
							<p>Ortodoncja jest jedną z  najszybciej rozwijających się dziedzin stomatologii. Zajmuje się kontrolą rozwoju uzębienia, zapobieganiem i leczeniem wad zgryzu oraz korygowaniem nieprawidłowości w zakresie położenia i ustawienia zębów.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Opinia klienta na stronie startowej -->
		<section class="testimonial">
			<div class="container">
				<div class="text-center text-white testimonial-content m-auto">
					<h2 class="text-uppercase testimonial-header">Opinia pacjenta</span></h2>
					<blockquote class="blockquote">
						<p class="testimonial-text">Profesjonalna opieka, życzliwe podejście do pacjenta, elastyczne terminy.</p>
						<footer class="blockquote-footer text-white">Dagmara Grabowska <cite title="Pacjentka">Prezes DG IT</cite></footer>
					</blockquote>
				</div>
			</div>
		</section>

		<!-- Formularz kontaktowy na stronie startowej -->
		<section class="write-to-us">
			<div class="container">
				<div class="row">
					<!-- Pierwsza kolumna - formularz -->
					<div class="col-md-4">
						<div class="write-to-us-left">
						<span class="text-uppercase text-success page-label">Masz pytanie?</span>
						<h2 class="text-uppercase write-to-us-header">Skontaktuj się z nami</h2>
						<form method="post" action="kontakt_proc.php">
							<label for="name" class="form-control-label">Imię i nazwisko</label>
							<input type="text" name="name" placeholder="Wpisz swoje imię i nazwisko" class="form-control">
							<label for="email" class="form-control-label">E-mail</label>
							<input type="email" name="email" placeholder="Wpisz swój adres e-mail" class="form-control">
							<label for="message" class="form-control-label">Wiadomość</label>
							<textarea name="message" cols="30" rows="5" placeholder="Wpisz treść wiadomości" class="form-control"></textarea>
							<button class="btn btn-success">Wyślij wiadomość</button>
						</form>
						<br/>
						</div>
					</div>
					<!-- Druga kolumna - obraz -->
					<div class="col-md-8 text-center m-auto">
						<img class="img-fluid" src="images/message.jpg" alt="kontakt - stomatologia - ortodoncja - endodoncja - protetyka">
					</div>
				</div>
			</div>
		</section>


<?php
	// Załadowanie stopki strony
	require ("footer.php");
?>