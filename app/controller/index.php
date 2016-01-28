<?php

require_once './app/start.php';

if (!$_SESSION['login']){
    header('location:' . BASE_URL . '/app/controller/login.php');
}
/*  listando chamados abertos limit 10 apenas abertos e andamento*/
$sqlcall = (" SELECT s.name name, d.name depart, c.*  FROM calls c ");
$sqlcall .= (" INNER JOIN depart d ON d.id = c.depart_id ");
$sqlcall .= (" INNER JOIN clients s ON s.id = c.client_id ");
$sqlcall .= (" WHERE c.status <> 'C' ORDER BY c.id DESC LIMIT 10 ");
$calls = $db->query($sqlcall);
$calls->execute();

$tasks = $db->query("SELECT * FROM tasks ORDER BY id DESC");
$tasks->execute();

/* listando atividades recentes limit 10*/
$activities = $db->prepare("SELECT DATE_FORMAT(a.created,'%H:%i') time, id FROM activity a WHERE user_id = ? ORDER BY id DESC LIMIT 10");
$activities->bindParam(1, $_SESSION['udi'], PDO::PARAM_INT);
$activities->execute();

$ctacts = $db->prepare("SELECT * FROM activity WHERE user_id = ?");
$ctacts->bindParam(1, $_SESSION['udi'], PDO::PARAM_INT);
$ctacts->execute();

require_once VIEW_ROOT.'/public/index.php';