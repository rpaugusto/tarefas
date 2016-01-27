<?php
require_once '../start.php';

$departs = $db->query("SELECT * FROM depart");
$departs->execute();

$clients = $db->query("SELECT * FROM clients");
$clients->execute();

if (!empty($_POST)){
    
    /*echo '<pre>';
    print_r($_POST);
    echo '</pre>';*/
    
    
    $client = $_POST['client'];
    $depart = $_POST['depart'];
    $desc = $_POST['desc'];
    $user = $_POST['user'];
    
    $insert = $db->prepare("INSERT INTO calls (client_id, depart_id, description, created) VALUES (? , ? , ? , NOW());");
    $insert->bindparam(1,$client,  PDO::PARAM_INT);
    $insert->bindparam(2,$depart,  PDO::PARAM_INT);
    $insert->bindparam(3,$desc,  PDO::PARAM_STR);
    
    $insert->execute();
    
    header('location: '.BASE_URL.'/app/controller/calllist.php');
    
}


require_once VIEW_ROOT . '/calls/add.php';