<?php

$id = (int)$_GET['id'];
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



