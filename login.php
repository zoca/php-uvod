<?php
session_start();

require_once __DIR__ . '/library/model-users.php';

if (empty($_SESSION['loggedin_user'])) {
    // $_SESSION['loggedin_user'] = [
    //         'id' => 34,
    //         'email' => 'zorica.mijatovic@cubes.rs',
    //         'name' => 'Zorica Mijatovic'
    // ];
}

//ovde se prihvataju vrednosti polja, popisati sve kljuceve i pocetne vrednosti
$formData = [
    'email' => '',
    'password' => '',
];

//ovde se smestaju greske koje imaju polja u formi
$formErrors = [];

$systemMessage = '';

//uvek nije prazan $_POST pokrenuta je forma
if (!empty($_POST)) {

    if (!empty($_POST['email'])) {
        //Dodavanje parametara medju podatke u formi
        $formData['email'] = $_POST['email'];

        //Filtering 1
        $formData['email'] = trim($formData['email']);
    } else { //Ovaj else ide samo ako je polje obavezno
        $formErrors['email'][] = "Polje email je obavezno";
    }


    if (!empty($_POST['password'])) {
        //Dodavanje parametara medju podatke u formi
        $formData['password'] = $_POST['password'];

        // PASSWORD NE TREBA DA SE TRIMUJE!!!

    } else { //Ovaj else ide samo ako je polje obavezno
        $formErrors['password'][] = "Polje password je obavezno";
    }

    //Ukoliko nema gresaka 
    if (empty($formErrors)) {

        if (usersCheckCredentials($formData['email'], $formData['password']) === false) {
            $formErrors['email'][] = 'Uneli ste neispravan email ili lozinku';
        } else {
            // dohvati usera po emailu
            // setujem odgovarajuci kljuc u sesiji
            //redirect na / profile.php
            $user = usersFetchOneByEmail($formData['email']);

            //MENJANJE STANJA SESIJE
            $_SESSION['loggedin_user'] = $user;

            header('Location: /profile1.php');
            exit;
        }
    }
}

$pageTitle = 'Login';
$pageDescription = 'Please log in';

require __DIR__ . '/templates/layout/t-header.php';
require __DIR__ . '/templates/t-login.php';
require __DIR__ . '/templates/layout/t-footer.php';
