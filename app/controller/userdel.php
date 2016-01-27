<?php

require_once '../start.php';

/* if (!$_SESSION['login']){
  header('location:' . BASE_URL . '/app/controller/login.php');
  } */

if (!empty($_GET['id'])) {

    $user = $db->prepare("DELETE FROM users WHERE id = ? ");
    $user->bindParam(1, $_GET['id'], PDO::PARAM_INT);
    $user->execute();
    
    header('location: '.BASE_URL.'/app/controller/userlist.php');
        
} else {

    echo '<script>';
    echo 'alert("Erro ao carregar dados para exclusão!");';
    echo 'location.href="userlist.php"';
    echo '</script>';
}

