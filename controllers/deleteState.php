<?php

$id =(int) $_GET['id'];

if ($id) {
    $delete = deleteState($id);
    header('Location:index.php');
}






