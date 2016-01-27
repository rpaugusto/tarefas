<?php

require_once '../start.php';

if (!$_SESSION['login']) {

    header('location:' . BASE_URL . '/admin/login.php');
}

//print_r($_GET);

//$id = $_GET['id'];

if (!empty($_GET['id'])) {
    
    $user = $db->prepare("SELECT * FROM users u LEFT JOIN log l ON l.user_id = u.id WHERE u.id = ? ");
    $user->bindParam(1, $_GET['id'], PDO::PARAM_INT);
    $user->execute();
    $user = $user->fetch(PDO::FETCH_ASSOC);

    
} else {
    
    echo '<script>';
    echo 'alert("Erro ao carregar dados para visualização!");';
    echo 'location.href="userlist.php"';
    echo '</script>';
    
}

require_once VIEW_ROOT . '/admin/view.php';
