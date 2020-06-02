<?php
    $id = (int)URL_PARAMS[1];
    $oldState = selectStateContent($id);

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
        $pageTitle ='Редакторовать';
        $pageContent = template('v_redactorState', [
            'validate' => $validate,
            'oldState' => $oldState
        ]);
    } else {
        $pageContent = template('errors/v_404');
    }

