<?php
include_once('model/article.php');
include_once('core/logs.php');
$id = (int)$_GET['id'];
$state = selectStateContent($id);

$l = logs();
$log = write($l);

if (thisState($id)) {
    include('views/v_state.php');
} else {
    include ('views/errors/v_404.php');
}



