<?php
//ovde se prihvataju vrednosti polja, popisati sve kljuceve i pocetne vrednosti
$formData = [
	//ovde napisati sve kljuceve i pocetne vrednosti
];

//ovde se smestaju greske koje imaju polja u formi
$formErrors = [];

$systemMessage = '';

//uvek nije prazan $_POST pokrenuta je forma
if (!empty($_POST)) {
	
	/*********** filtriranje i validacija polja ****************/
	
	/*********** filtriranje i validacija polja ****************/
	
	
	//Ukoliko nema gresaka 
	if (empty($formErrors)) {
		//Uradi akciju koju je korisnik trazio
		$systemMessage = 'SUCCESS';
	}
}

