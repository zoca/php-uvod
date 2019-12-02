<?php
session_start();

$posibleMonth = [
    1 => 'Jan',
    2 => 'Frb',
    3 => 'Mar',
    4 => 'Apr',
    5 => 'May',
    6 => 'Jun',
    7 => 'Jul',
    8 => 'Aug',
    9 => 'Sep',
    10 => 'Oct',
    11 => 'Nov',
    12 => 'Dec',
];

//ovde se prihvataju vrednosti polja, popisati sve kljuceve i pocetne vrednosti
$formData = [
    'day' => '',
    'month' => '',
    'year' => '',
];

//ovde se smestaju greske koje imaju polja u formi
$formErrors = [];

$systemMessage = '';

//uvek nije prazan $_POST pokrenuta je forma
if (!empty($_POST)) {

    if (isset($_POST['day'])) {
        //Dodavanje parametara medju podatke u formi
        $formData['day'] = $_POST['day'];

        //Filtering 1
        $formData['day'] = trim($formData['day']);

        if ($formData['day'] > 31 || $formData['day'] < 1) {
            $formErrors['day'][] = 'Chosen day is invalid!';
        }
    } else { //Ovaj else ide samo ako je polje obavezno
        $formErrors['day'][] = "Polje day je obavezno";
    }

    if (isset($_POST['month'])) {
        //Dodavanje parametara medju podatke u formi
        $formData['month'] = $_POST['month'];

        //Filtering 1
        $formData['month'] = trim($formData['month']);

        $formData['month'] = (int) $formData['month'];

        if(!isset($posibleMonth[$formData['month']])){
            $formErrors['month'][] = 'You have chosen invalid month!';
        }
    } else { //Ovaj else ide samo ako je polje obavezno
        $formErrors['month'][] = "Polje month je obavezno";
    }

    if (isset($_POST['year'])) {
        //Dodavanje parametara medju podatke u formi
        $formData['year'] = $_POST['year'];

        //Filtering 1
        $formData['year'] = trim($formData['year']);

        $formData['year'] = (int) $formData['year'];

        if ($formData['year'] < 1900) {
            $formErrors['year'][] = 'Year must be after 1900';
        }
    } else { //Ovaj else ide samo ako je polje obavezno
        $formErrors['year'][] = "Polje year je obavezno";
    }

    //Ukoliko nema gresaka 
    if (empty($formErrors)) {
        //Uradi akciju koju je korisnik trazio
        $systemMessage = 'SUCCESS';
    }
}

$pageTitle = 'Your horoscope';

require __DIR__ . '/templates/layout/t-header.php';
require __DIR__ . '/templates/t-horoscope.php';
require __DIR__ . '/templates/layout/t-footer.php';
