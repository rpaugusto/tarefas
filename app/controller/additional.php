<?php

require_once '../start.php';


$departs = $db->query("SELECT * FROM depart");
$departs->execute();

$clients = $db->query("SELECT * FROM clients");
$clients->execute();

$users = $db->query("SELECT * FROM users");
$users->execute();

require_once VIEW_ROOT.'/public/addtional.php';