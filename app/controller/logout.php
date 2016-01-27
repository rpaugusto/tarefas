<?php

require_once '../start.php';

$_SESSION = array();
$_SESSION['login'] = FALSE;
//var_dump($_SESSION);

header('location:'.BASE_URL);