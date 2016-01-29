<?php

require_once '../start.php';

if (!$_SESSION['login']) {
    header('location:' . BASE_URL . '/app/controller/login.php');
}

$sql = ("SELECT DATE_FORMAT(a.created,'%d/%b - %H:%i') data, a.description, u.name nome, a.id ");
$sql .= (" FROM activity a INNER JOIN users u on u.id = a.user_id ");

if (!isset($_GET)) {
    header('location: ' . BASE_URL . '/app/controller/actlist.php');
} else {
    $activities = $db->prepare($sql . "WHERE a.id = ? ORDER BY id DESC ");
    $activities->bindParam(1, $_GET['id'], PDO::PARAM_INT);
}

$activities->execute();
$activities = $activities->fetch(PDO::FETCH_ASSOC);

require_once VIEW_ROOT . '/activity/view.php';
