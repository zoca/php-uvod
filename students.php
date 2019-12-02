<?php
session_start();

require_once __DIR__ . '/library/model-students.php';

$students = studentsFatchAll();

$pageTitle = 'Informacije o studentima';

require __DIR__ . '/templates/layout/t-header.php';
require __DIR__ . '/templates/t-students.php';
require __DIR__ . '/templates/layout/t-footer.php';

?>
    