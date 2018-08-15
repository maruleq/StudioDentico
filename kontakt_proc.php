<?php

/**
	******************************************************
	**	Przetwarzanie informacji z formularza kontaktowego
	******************************************************
*/

// Tworzenie krótkich nazw zmiennych
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


// Adres email z którego ma być wysłana wiadomość
$odkogo = "stomatolog@studiodentico.pl";

// Adres email na który ma być dostarczona wiadomość
$dokogo = "stomatolog@studiodentico.pl";

// Tytuł jaki ma mieć ta wiadomość email
$tytul = "Wiadomość z formularza kontaktowego www.studiodentico.pl";


// Sprawdzenie poprawności wprowadzonych danych i przygotowanie wiadomości e-mail
	If (empty($_POST['name']) || empty($_POST['message']) || empty($_POST['email'])) {
		header("Location: index.php");
	}

		else {
			// Przygotowanie treści wiadomości
			$wiadomosc = "";
			$wiadomosc .= "Imię i nazwisko: " . $name . "\r\n";
			$wiadomosc .= "Email: " . $email . "\r\n";
			$wiadomosc .= "Wiadomość: " . $message . "\r\n";

			// Dodanie UTF-8 do naglowka wiadomości
			$naglowek = "";
			$naglowek .= "Od:" . $odkogo . "\r\n";
			$naglowek .= "Content-Type:text/plain;charset=utf-8";

			// Wysyłanie wiadomości
			$sukces = mail ($dokogo, $tytul, $wiadomosc, $naglowek);

		// Przekierowanie na potwierdzenie lub zgłoszenie błędu
			if ($sukces){
			  header("Location: email_success.php");
			}
			else {
			  header("Location: error.php");
			}
		}