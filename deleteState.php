<?php
include_once ('model/article.php');
$id =(int) $_GET['id'];

$delete = deleteState($id);

if ($delete) {
    header('Location:index.php');
}

