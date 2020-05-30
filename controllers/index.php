<?php
include_once('model/article.php');
include_once('core/logs.php');
$states = selectState();
$l = logs();
$log = write($l);
include('views/v_index.php');

