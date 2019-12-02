<?php
session_start();

$systemMessage = '';

$formData = [
    'student' => '',

];

if (!empty($_POST)) {
    // kod za proveru polja
    if (isset($_FILES['homework']) && empty($_FILES['homework']['error'])) {

        $homeworkFileName = $_FILES['homework']['name'];

        //filtriranje
        $homeworkFileName = str_replace(['$', '"', '\'', ' ', '\\'], '-', $homeworkFileName); // zameni sve navedene karaktere sa -

        $homeworkFileName = date('Y-m-d-H-i-s') . '-' . $homeworkFileName; // nadovezi na vreme ime fajla

        //smestanje putonja do tmp fajla
        $homeworkFileTmpPath = $_FILES['homework']['tmp_name'];

        $homeworkFileMime = mime_content_type($homeworkFileTmpPath);

        // application/pdf img/jpeg img/png
        $homeworkFileAllowedMime = ['application/zip', 'application/pdf'];

        if (!in_array($homeworkFileMime, $homeworkFileAllowedMime)) {
            $formErrors['homework'][] = 'fajl moze biti u formatu: ' . implode(',', $homeworkFileAllowedMime);
        }

        $homeworkFileSize = filesize($homeworkFileTmpPath);

        if ($homeworkFileSize > 5 * 1024 * 1024) { // 5 MB
            $formErrors['homework'][] = 'Fajl ne sme biti veci od 5 MB';
        }
    } else { //Ovaj else ide samo ako je polje obavezno
        $formErrors['homework'][] = "Polje homework je obavezno";
    }

    if (empty($formErrors)) {
        //nema gresaka uradi akciju za koju je forma namenjena
        $homeworkFileDestinationPath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $homeworkFileName;
        //$homeworkFileDestinationPath = __DIR__ . '/uploads/' . $homeworkFileName;
        // __DIR__ . '/uploads/' . $homeworkFileName

        move_uploaded_file($homeworkFileTmpPath, $homeworkFileDestinationPath);

        if (!move_uploaded_file($homeworkFileTmpPath, $homeworkFileDestinationPath)) {
            $formErrors['homework'][] = 'Doslo je do greske prilikom cuvanja fajla';
        } else {
            $systemMessage = 'Uspesno ste poslali domaci';
        }
    }
}


$uploadedFiles = scandir($_SERVER['DOCUMENT_ROOT'] . '/uploads');

$pageTitle = 'Uploaded files';

require __DIR__ . '/templates/layout/t-header.php';
require __DIR__ . '/templates/t-files.php';
require __DIR__ . '/templates/layout/t-footer.php';

?>

