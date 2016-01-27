<?php

require_once '../start.php';

if (!empty($_GET)) {

    $client = $db->prepare("SELECT c.*, d.name depart FROM clients c INNER JOIN depart d ON d.id = c.depart_id WHERE c.id = ? ");
    $client->bindParam(1, $_GET['id'], PDO::PARAM_INT);
    $client->execute();
    $client = $client->fetch(PDO::FETCH_ASSOC);
    
    require_once VIEW_ROOT . '/clients/view.php';
    
} else {
    
    echo '<script>';
    echo 'alert("Erro ao carregar dados para visualização!");';
    echo 'location.href="clientlist.php"';
    echo '</script>';
    
}