<?php

require_once '../start.php';

/* if (!$_SESSION['login']){
  header('location:' . BASE_URL . '/app/controller/login.php');
  } */

//print_r($_POST);
//print_r($_GET);

if (!empty($_GET['id'])) {

    $id = $_GET['id'];

    $insert = $db->prepare("UPDATE users SET active = 1 WHERE id = ? ");
    $insert->bindparam(1, $id, PDO::PARAM_INT);

    $insert->execute();

    echo '<script>';
    echo 'alert("Usuario Desbloqueado!");';
    echo 'location.href="userview.php?id='.$id.'"';
    echo '</script>';
    
} else {

    echo '<script>';
    echo 'alert("Erro ao bloquear!");';
    echo 'location.href="userlist.php"';
    echo '</script>';
}