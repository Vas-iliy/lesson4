<?php
include_once ('model/article.php');
include_once('core/logs.php');
$id =(int) $_GET['id'];

if ($id) {
    $delete = deleteState($id);
    $l = logs();
    $log = write($l);
    header('Location:index.php');
}






