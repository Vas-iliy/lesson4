<?php
include_once ('init.php');

$cname = $_GET['c'] ?? 'index';
$patch = "controllers/$cname.php";
$pageTitle = 'Ошибка 404';
$pageContent = '';

if (checkControllerName($cname) && file_exists($patch)) {
    include_once ($patch);
} else {
    template('errors/v_404');
}

$html = template('standart/v_main', [
    'title' => $pageTitle,
    'content' => $pageContent
]);

echo $html;