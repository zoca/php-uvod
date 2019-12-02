<?php

session_start();

//Sesija korisnika na sajtu

// sesija je mesto gde se cuva personalizovan sadrzaj za samog posetioca (za svaki brauzer pojedinacno)

if(!isset($_SESSION['counter'])){
    $_SESSION['counter'] = 0;
}

$test = 1;

$_SESSION['counter'] += 1;

$test += 1;

print_r($_SESSION);
echo '<br>';
var_dump($test);