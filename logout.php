<?php
session_start();  // uvek pri vrhu sajta

//unset($_SESSION['loggedin_user']);


// unisytava ucitanu sesiju
session_destroy();


// REDIREKTOVANJE -> funkciju header mozemo da pozovemo samo ako nemamo prethodno nikakav html kod ili echo

header('Location: /index.php');
exit;