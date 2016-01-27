<?php

require_once '../start.php';

/* if (!$_SESSION['login']){
  header('location:' . BASE_URL . '/app/controller/login.php');
  } */

//print_r($_POST);
//print_r($_GET);

if (!empty($_GET['id'])) {

    $user = array('id' => $_GET['id']);
    require_once VIEW_ROOT . '/admin/passwd.php';
    
} else if (!empty($_POST)) {

    $id = $_POST['id'];
    $passwd = md5($_POST['passwd']);


    $insert = $db->prepare("UPDATE users SET passwd = ? WHERE id = ? ");
    $insert->bindparam(1, $passwd, PDO::PARAM_STR);
    $insert->bindparam(2, $id, PDO::PARAM_INT);
    $insert->execute();

    header('location: ' . BASE_URL . '/app/controller/userlist.php');
    
} else {

    echo '<script>';
    echo 'alert("Erro ao carregar dados para visualização!");';
    echo 'location.href="userlist.php"';
    echo '</script>';
}



