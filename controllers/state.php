<?php

$id = (int)$_GET['id'];
$state = selectStateContent($id);

if (thisState($id)) {
    include('views/v_state.php');
} else {
    include ('views/errors/v_404.php');
}



