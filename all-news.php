<?php
session_start();

require_once __DIR__ . '/library/model-news.php';

$newsList = newsFetchAll();


$pageTitle = 'All News';

require __DIR__ . '/templates/layout/t-header.php';
require __DIR__ . '/templates/t-all-news.php';
require __DIR__ . '/templates/layout/t-footer.php';
