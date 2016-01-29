<?php

require_once '../start.php';

if (!$_SESSION['login']) {
    header('location:' . BASE_URL . '/app/controller/login.php');
}

$sql  = ("SELECT DATE_FORMAT(a.created,'%d/%b - %H:%i') data, a.description, u.name nome, a.id ");
$sql .= (" FROM activity a INNER JOIN users u on u.id = a.user_id ");

if (!isset($_GET)) {
    $activities = $db->prepare($sql . "WHERE user_id = ? ORDER BY id DESC ");
    $activities->bindParam(1, $_GET['id'], PDO::PARAM_INT);
} else {
    $activities = $db->prepare($sql);
}

$activities->execute();

require_once VIEW_ROOT . '/activity/list.php';
