<?php
require_once '../start.php';

$departs = $db->query("SELECT * FROM depart");
$departs->execute();


if (!empty($_POST)){
    
    /*echo '<pre>';
    print_r($_POST);
    echo '</pre>';*/
    
    $name = $_POST['name'];
    $depart = $_POST['depart'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];    
    
    $insert = $db->prepare("INSERT INTO clients (name, depart_id, fone, email) VALUES(?,?,?,?);");
    $insert->bindparam(1,$name,  PDO::PARAM_STR);
    $insert->bindparam(2,$depart,  PDO::PARAM_INT);
    $insert->bindparam(3,$fone,  PDO::PARAM_INT);
    $insert->bindparam(4,$email,  PDO::PARAM_STR);
    
    $insert->execute();
    
    header('location: '.BASE_URL.'/app/controller/additional.php');
    
}


require_once VIEW_ROOT . '/clients/add.php';