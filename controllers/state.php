<?php
include_once('model/article.php');
include_once('core/logs.php');
$id = $_GET['id'];
$state = selectStateContent($id);

$l = logs();
$log = write($l);

include('views/v_state.php');



