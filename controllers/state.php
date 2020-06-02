<?php

$id = (int)URL_PARAMS[1];
$state = selectStateContent($id);

if (thisState($id)) {
    $pageTitle = 'Статья';
    $pageContent = template('v_state', [
        'state' => $state,
        'id' => $id
    ]);
} else {
    $pageContent = template('errors/v_404');
}



