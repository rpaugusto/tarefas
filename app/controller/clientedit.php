<?php

require_once '../start.php';

$departs = $db->query("SELECT * FROM depart");
$departs->execute();

if (!empty($_GET)) {

    $client = $db->prepare("SELECT * FROM clients WHERE id = ? ");
    $client->bindParam(1, $_GET['id'], PDO::PARAM_INT);
    $client->execute();
    $client = $client->fetch(PDO::FETCH_ASSOC);
    
    require_once VIEW_ROOT . '/clients/edit.php';
    
} else if (!empty($_POST)) {

    $name = $_POST['name'];
    $depart = $_POST['depart'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];

    $insert = $db->prepare("UPDATE clients (name = ? , depart_id = ? , fone = ? , email = ?) WHERE(id = ?);");
    $insert->bindparam(1, $name, PDO::PARAM_STR);
    $insert->bindparam(2, $depart, PDO::PARAM_INT);
    $insert->bindparam(3, $fone, PDO::PARAM_INT);
    $insert->bindparam(4, $email, PDO::PARAM_STR);
    $insert->bindparam(5, $id, PDO::PARAM_INT);

    $insert->execute();

    header('location: ' . BASE_URL . '/app/controller/clientlist.php');
    
} else {
    
    echo '<script>';
    echo 'alert("Erro ao carregar dados para visualização!");';
    echo 'location.href="clientlist.php"';
    echo '</script>';
    
}