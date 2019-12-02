<?php
session_start();

require_once __DIR__ . '/library/model-news.php';

if (empty($_GET['id'])){
    die('Morate proslediti id vesti');
}

$id = $_GET['id'];

$news = newsFetchOneById($id);

// if (is_numeric($news)){
//     die('Vest nije pronadjena');
// }

// if ($news === null){
//     die('Vest nije pronadjena');
// }

if (!is_array($news)){
    die('Vest nije pronadjena');
}


$pageTitle = $news['title'];

require __DIR__ . '/templates/layout/t-header.php';
require __DIR__ . '/templates/t-single-news.php';
require __DIR__ . '/templates/layout/t-footer.php';
