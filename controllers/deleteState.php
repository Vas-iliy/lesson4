<?php

$id =(int) URL_PARAMS[1];

if ($id) {
    $delete = deleteState($id);
    $url = BASE_URL;
    header("Location:$url");
}






