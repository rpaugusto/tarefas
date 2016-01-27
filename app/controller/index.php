<?php

require_once './app/start.php';

if (!$_SESSION['login']){
    header('location:' . BASE_URL . '/app/controller/login.php');
}

$users = $db->query("SELECT * FROM users");
$users->execute();

$calls = $db->query("SELECT s.name name, d.name depart, c.id  FROM calls c INNER JOIN depart d ON d.id = c.depart_id INNER JOIN clients s ON s.id = c.client_id ");
$calls->execute();


require_once VIEW_ROOT.'/public/index.php';