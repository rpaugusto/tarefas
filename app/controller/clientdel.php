<?php

require_once '../start.php';

if (!empty($_GET['id'])) {

    $client = $db->prepare("DELETE FROM clients WHERE id = ? ");
    $client->bindParam(1, $_GET['id'], PDO::PARAM_INT);
    $client->execute();

    header('location: '.BASE_URL.'/app/controller/clientlist.php');
    
} else {

    echo '<script>';
    echo 'alert("Erro ao carregar dados para exclusão!");';
    echo 'location.href="clientlist.php"';
    echo '</script>';

    
}
