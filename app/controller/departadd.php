<?php
require_once '../start.php';

if (!empty($_POST)){
    
    /*echo '<pre>';
     *print_r($_POST);
     *echo '</pre>';
     */
    
    $name = $_POST['name'];
    $initials = $_POST['initials'];
    
    $insert = $db->prepare("INSERT INTO depart (name, initials) VALUE (?,?);");
    $insert->bindparam(1,$name,  PDO::PARAM_STR);
    $insert->bindparam(2,$initials,  PDO::PARAM_STR);
    
    $insert->execute();
    
    header('location: '.BASE_URL.'/app/controller/additional.php');
    
}


require_once VIEW_ROOT . '/depart/add.php';	