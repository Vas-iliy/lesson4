<?php
$id = URL_PARAMS[1];
$state_cat = state_cat($id);

$pageTitle = 'Статьи категории';
$pageContent = template('v_state_cat', ['state_cat' => $state_cat]);
