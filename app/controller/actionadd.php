<?php

require_once '../start.php';

if (!empty($_GET)) {

    require_once VIEW_ROOT . '/actions/add.php';
    
} else if (!empty($_POST)) {

    echo '<pre>';
      print_r($_POST);
      echo '</pre>';


    $user = $_POST['user'];
    $call = $_POST['call'];
    $desc = $_POST['desc'];

    $insert = $db->prepare("INSERT INTO actions (user_id, call_id, desc_act, daytime) VALUES (? , ? , ? , NOW());");
    $insert->bindparam(1, $user, PDO::PARAM_INT);
    $insert->bindparam(2, $call, PDO::PARAM_INT);
    $insert->bindparam(3, $desc, PDO::PARAM_STR);
    $insert->execute();
    
    $update = $db->prepare("UPDATE calls SET modified = NOW(), status = 'W' WHERE id = ?");
    $update->bindparam(1, $call, PDO::PARAM_INT);
    $update->execute();

    header('location: ' . BASE_URL . '/app/controller/callview.php?id='.$call);
    
} else {

    echo '<script>';
    echo 'alert("Erro ao carregar dados!");';
    echo 'location.href="calllist.php"';
    echo '</script>';
}