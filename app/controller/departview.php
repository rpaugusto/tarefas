<?php

require_once '../start.php';

if (!empty($_GET)) {

    $depart = $db->prepare("SELECT * FROM depart WHERE id = ? ");
    $depart->bindParam(1, $_GET['id'], PDO::PARAM_INT);
    $depart->execute();
    $depart = $depart->fetch(PDO::FETCH_ASSOC);
    
    $clients = $db->prepare("SELECT name, fone FROM clients WHERE depart_id = ? ");
    $clients->bindParam(1, $_GET['id'], PDO::PARAM_INT);
    $clients->execute();
    
    require_once VIEW_ROOT . '/depart/view.php';
    
} else {
    
    echo '<script>';
    echo 'alert("Erro ao carregar dados para visualização!");';
    echo 'location.href="clientlist.php"';
    echo '</script>';
    
}