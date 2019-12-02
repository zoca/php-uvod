<?php
session_start();

$pageTitle = 'Home';

require __DIR__ . '/templates/layout/t-header.php';
require __DIR__ . '/templates/t-index.php';
require __DIR__ . '/templates/layout/t-footer.php';
