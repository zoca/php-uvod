<?php
session_start();

if (empty($_SESSION['loggedin_user'])) {
    //Korisnik nije ulogovan, redirect na login stranu, ovoj stranici moze da pristupi samo logovani user
    header('Location: /login.php');
    exit;
 } 

 //citanje ulogovanog user-a!!!
 $user = $_SESSION['loggedin_user'];

$pageTitle = 'Your profile';
$pageDescription = '';

require __DIR__ . '/templates/layout/t-header.php';
require __DIR__ . '/templates/t-profile.php';
require __DIR__ . '/templates/layout/t-footer.php';