<?php

// Tworzenie krótkich nazw zmiennych
$name = $_POST['name'];
$email = $_POST['email'];
$msg_title = $_POST['msg_title'];
$message = $_POST['message'];

// Adres email z którego ma być wysłana wiadomość
$odkogo = "stomatolog@studiodentico.pl";

// Adres email na który ma być dostarczona wiadomość
$dokogo = "marek@grabowscy.eu";

// Tytuł jaki ma mieć ta wiadomość email
$tytul = "Wiadomość z formularza kontaktowego www.studiodentico.pl";


// Sprawdzenie poprawności wprowadzonych danych i przygotowanie wiadomości e-mail
	If ((empty($_POST['name'])) || (empty($_POST['email'])) || (empty($_POST['message']))) {
		header("Location: error.php");
	}

		else {
			// Przygotowanie treści wiadomości
			$wiadomosc = "";
			$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
			$wiadomosc .= "Email: " . $email . "\n";
			$wiadomosc .= "Wiadomość: " . $message . "\n";

			// Dodanie UTF-8 do naglowka wiadomości
			$naglowek = "";
			$naglowek .= "Od:" . $odkogo . " \n";
			$naglowek .= "Content-Type:text/plain;charset=utf-8";

			// Wysyłanie wiadomości
			$sukces = mail ($dokogo, $tytul, $wiadomosc, $naglowek);

		// Przekierowanie na potwierdzenie lub zgłoszenie błędu
		if ($sukces){
		  header("Location: email_succes.php");
		}
		else {
		  header("Location: error.php");
		}
		}