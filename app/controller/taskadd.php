<?php
require_once '../start.php';

if (!$_SESSION['login']){
    header('location:' . BASE_URL . '/app/controller/login.php');
}


if (!empty($_POST)){
    
    /*echo '<pre>';
    print_r($_POST);
    echo '</pre>';*/
    
    $desc = $_POST['desc'];
    $user = $_SESSION['uid'];
    
    $insert = $db->prepare("INSERT INTO activity (desc, user_id) VALUES (?,?)");
    $insert->bindparam(1,$desc,  PDO::PARAM_STR);
    $insert->bindparam(2,$user,  PDO::PARAM_INT);
    
    $insert->execute();
    
    header('location: '.BASE_URL.'/app/controller/actlist.php');
    
}


require_once VIEW_ROOT . '/activity/add.php';