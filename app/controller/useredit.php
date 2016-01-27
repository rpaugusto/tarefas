<?php

require_once '../start.php';

/* if (!$_SESSION['login']){
  header('location:' . BASE_URL . '/app/controller/login.php');
  } */

//print_r($_POST);
//print_r($_GET);

if (!empty($_GET['id'])) {

    $user = $db->prepare("SELECT * FROM users u LEFT JOIN log l ON l.user_id = u.id WHERE u.id = ? ");
    $user->bindParam(1, $_GET['id'], PDO::PARAM_INT);
    $user->execute();
    $user = $user->fetch(PDO::FETCH_ASSOC);
    
} else if (!empty($_POST)) {

    $id = $_POST['id'];
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

    header('location: ' . BASE_URL . '/app/controller/userlist.php');
    
} else {

    echo '<script>';
    echo 'alert("Erro ao carregar dados para visualização!");';
    echo 'location.href="userlist.php"';
    echo '</script>';
}


require_once VIEW_ROOT . '/admin/edit.php';
