<?php

$states = selectState();
$cats = selectCat();
$pageTitle = 'Главная';
$content = template('v_index', ['states' => $states]);
$left = template('v_cats', ['cats' => $cats]);
$pageContent = template('standart/v_main2c', [
    'left' => $left,
    'title' => $pageTitle,
    'content' => $content
]);

