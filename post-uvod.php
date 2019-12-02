<?php
session_start();

//print_r($_POST);
$systemMessage = '';


//default values
$formData = [
    'first_name' => '',
    'last_name' => '',
    'gender' => 'Z',
    'course' => 'php'
];
//form errors
$formErrors = [];

if (!empty($_POST)) {
    if (!empty($_POST['first_name'])) {
        $formData['first_name'] = $_POST['first_name'];

        //filtering
        $formData['first_name'] = trim($formData['first_name']);

        if (mb_strlen($formData['first_name']) < 3) {
            $formErrors['first_name'][] = 'Polje mora da ima minimum 3 karaktera!';
        }

        if (mb_strlen($formData['first_name']) > 10) {
            $formErrors['first_name'][] = 'Polje mora da ima maxsimum 10 karaktera!';
        }

        if (strstr($formData['first_name'], '_')) {
            $formErrors['first_name'][] = 'Polje ne sme da sadrzi donju crtu (_)';
        }
    } else {
        //nije prosledjen parametar
        $formErrors['first_name'][] = 'Polje je obavezno!';
    }

    if (isset($_POST["last_name"])) {
        //Dodavanje parametara medju podatke u formi
        $formData["last_name"] = $_POST["last_name"];

        //Filtering 1
        $formData["last_name"] = trim($formData["last_name"]);

        if (mb_strlen($formData['last_name']) < 3) {
            $formErrors["last_name"][] = "Prezime mora da ima minimu 3 karaktera";
        }
        if (mb_strlen($formData['last_name']) > 10) {
            $formErrors["last_name"][] = "Prezime mora da ima maksimum 10 karaktera";
        }
    } else { //Ovaj else ide samo ako je polje obavezno
        $formErrors["last_name"][] = "Polje last_name je obavezno";
    }

    if (isset($_POST["gender"])) {
        //Dodavanje parametara medju podatke u formi
        $formData["gender"] = $_POST["gender"];

        //Filtering 1
        $formData["gender"] = trim($formData["gender"]);


        $genderPossibleValues = ["M", "Z"];

        //Validation videti da li je prosledjena vrednost medju opcijama
        if ($formData["gender"] !== "" && !in_array($formData["gender"], $genderPossibleValues)) {
            $formErrors["gender"][] = "Izabrali ste neodgovarajucu vrednost za polje gender";
        }
        
    } else { //Ovaj else ide samo ako je polje obavezno
        $formErrors["gender"][] = "Polje gender je obavezno";
    }

    if (!empty($_POST['course'])) {
        $formData['course'] = $_POST['course'];

        $coursePossibleValues = ['php', 'html_and_css', 'qa'];
        if (!in_array($formData['course'], $coursePossibleValues)) {
            $formErrors['course'][] = 'Izabrali ste nepostojecu opciju';
        }
    } else {
        $formErrors['course'][] = 'Izaberite kurs';
    }

    if (empty($formErrors)) {
        //NEMA GRESAKA NA FORMI, IZVRSI AKCIJU NA KOJU SE FORMA ODNOSI
        $systemMessage = 'Uspesno ste se prijavili na kurs!';
    }
}

$pageTitle = 'POST uvod';

require __DIR__ . '/templates/layout/t-header.php';
require __DIR__ . '/templates/t-post-uvod.php';
require __DIR__ . '/templates/layout/t-footer.php';