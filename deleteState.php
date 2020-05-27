<?php
include_once ('model/article.php');
include_once('model/logs.php');
$id =(int) $_GET['id'];

if ($id) {
    $delete = deleteState($id);
    $l = logs();
    $log = write($l);
}


if ($delete) {
    header('Location:index.php');
}

