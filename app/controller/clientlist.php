<?php
require_once '../start.php';

$clients = $db->query("SELECT c.id ,c.name name, c.fone fone, d.name depart FROM clients c INNER JOIN depart d ON d.id = c.depart_id ");
$clients->execute();

require_once VIEW_ROOT . '/clients/list.php';