<?php

if ($_POST['title']) {
    $params = extractFields($_POST, ['title', 'content']);
    $validate = validate($params);

    if (empty($validate)) {
        $state = insertState($params);
        header('Location:index.php');
        die();
    }

} else {
    $params = ['title' => '', 'content' => ''];
    $validate = [];
}

$pageTitle = 'Добавить статью';
$pageContent = template('v_newState', [
    'validate' => $validate,
    'params' => $params
]);
