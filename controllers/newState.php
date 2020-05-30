<?php
include_once('model/article.php');
include_once('core/logs.php');
include_once('core/arr.php');

$l = logs();
$log = write($l);

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

include('views/v_newState.php');
