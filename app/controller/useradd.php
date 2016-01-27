<?php
require_once '../start.php';

/*if (!$_SESSION['login']){
    header('location:' . BASE_URL . '/app/controller/login.php');
}*/


if (!empty($_POST)){
    
    /*echo '<pre>';
    print_r($_POST);
    echo '</pre>';*/
    
    $name = $_POST['name'];
    $login = $_POST['login'];
    $passwd = sha1(md5($_POST['passwd']));
    $level = $_POST['level'];
    $active = $_POST['active'];
    
    $insert = $db->prepare("CALL sp_user_add(?,?,?,?,?);");
    $insert->bindparam(1,$name,  PDO::PARAM_STR);
    $insert->bindparam(2,$passwd,  PDO::PARAM_STR);
    $insert->bindparam(3,$login,  PDO::PARAM_STR);
    $insert->bindparam(4,$level,  PDO::PARAM_INT);
    $insert->bindparam(5,$active,  PDO::PARAM_INT);
    
    $insert->execute();
    
    header('location: '.BASE_URL.'/app/controller/userlist.php');
    
}


require_once VIEW_ROOT . '/admin/add.php';