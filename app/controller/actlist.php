<?php

require_once '../start.php';

if (!$_SESSION['login']) {
    header('location:' . BASE_URL . '/app/controller/login.php');
}


$activities = $db->prepare("SELECT DATE_FORMAT(a.created,'%H:%i') time, DATE_FORMAT(a.created,'%d/%b') data FROM activity a WHERE user_id = ? ORDER BY id DESC LIMIT 10");
$activities->bindParam(1, $_SESSION['udi'], PDO::PARAM_INT);
$activities->execute();
