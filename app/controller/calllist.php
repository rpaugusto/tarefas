<?php

require_once '../start.php';

$count = $db->query("SELECT status, count(*) num FROM `calls` GROUP BY status");
$count->execute();

$sql = ("SELECT s.name name, d.name depart, c.*  FROM calls c INNER JOIN depart d ON d.id = c.depart_id INNER JOIN clients s ON s.id = c.client_id ");

if (empty($_GET)) {
    $calls = $db->prepare($sql);
} else {
    $calls = $db->prepare($sql . " WHERE c.status = ? ");
    $calls->bindparam(1, $_GET['st'], PDO::PARAM_STR);
}

$calls->execute();

require_once VIEW_ROOT . '/calls/list.php';
