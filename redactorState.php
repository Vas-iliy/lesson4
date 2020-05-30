<?php
    include_once ('model/article.php');
    include_once('core/logs.php');
    include_once ('core/arr.php');
    $id = $_GET['id'];
    $oldState = selectStateContent($id);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $params = extractFields($_POST, ['title', 'content']);
        $l = addLogs($params['title'], $params['content']);
        $validate = validate($params);

        if (empty($validate)) {
            $log = write($l);
            $update = insertStateUpdate($params, $id);
            header('Location:index.php');
            die();
        }
    } else {

        $params = ['title' => '', 'content' => ''];
        $validate = [];
    }

include ('views/v_redactorState.php');
