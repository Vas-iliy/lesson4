<?php
    include_once('model/article.php');
    include_once('core/logs.php');
    include_once('core/arr.php');
    $id = (int)$_GET['id'];
    $oldState = selectStateContent($id);
    $l = logs();
    $log = write($l);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $params = extractFields($_POST, ['title', 'content']);
        $validate = validate($params);

        if (empty($validate)) {
            $update = insertStateUpdate($params, $id);
            header('Location:index.php');
            die();
        }
    } else {

        $params = ['title' => '', 'content' => ''];
        $validate = [];
    }

    if (thisState($id)) {
        include('views/v_redactorState.php');
    } else {
        include ('views/errors/v_404.php');
    }

