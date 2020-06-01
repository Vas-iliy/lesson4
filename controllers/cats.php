<?php
$id = $_GET['id'];
$state_cat = state_cat($id);

$pageTitle = 'Статьи категории';
$pageContent = template('v_state_cat', ['state_cat' => $state_cat]);
