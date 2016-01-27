<?php

require_once '../start.php';

$calls = $db->query("SELECT s.name name, d.name depart, c.*  FROM calls c INNER JOIN depart d ON d.id = c.depart_id INNER JOIN clients s ON s.id = c.client_id ");
$calls->execute();


require_once VIEW_ROOT . '/calls/list.php';
