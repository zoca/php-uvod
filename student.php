<?php
session_start();

require_once __DIR__ . '/library/model-students.php';

if (empty($_GET['id'])) {
    die('nije prosledjen id student');
}

$id = $_GET['id'];

$student = studentFetchOneById($id);

if ($student === null) {
    die('nije pronadjen student sa ID-ijem: ' . $id);
}

$pageTitle = 'Informacije o studentu';

require __DIR__ . '/templates/layout/t-header.php';
require __DIR__ . '/templates/t-student.php';
require __DIR__ . '/templates/layout/t-footer.php';

?>
