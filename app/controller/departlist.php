<?php

require_once '../start.php';

$departs = $db->query("SELECT * FROM depart ");
$departs->execute();

require_once VIEW_ROOT . '/depart/list.php';