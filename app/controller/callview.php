<?php

require_once '../start.php';

if (!empty($_GET)) {

    $call = $db->prepare("SELECT s.name name, d.name depart, c.*  FROM calls c INNER JOIN depart d ON d.id = c.depart_id INNER JOIN clients s ON s.id = c.client_id WHERE c.id = ? ");
    $call->bindParam(1, $_GET['id'], PDO::PARAM_INT);
    $call->execute();
    $call = $call->fetch(PDO::FETCH_ASSOC);
    
    $actions = $db->prepare("SELECT * FROM actions a INNER JOIN users u ON u.id = a.user_id WHERE call_id = ?");
    $actions->bindParam(1, $_GET['id'], PDO::PARAM_INT);
    $actions->execute();
    
    require_once VIEW_ROOT . '/calls/view.php';
    
} else {
    
    echo '<script>';
    echo 'alert("Erro ao carregar dados para visualização!");';
    echo 'location.href="calllist.php"';
    echo '</script>';
    
}