<?php
include_once ('init.php');

$cname = $_GET['c'] ?? 'index';
$patch = "controllers/$cname.php";
include_once ($patch);