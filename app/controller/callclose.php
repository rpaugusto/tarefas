<?php

require_once '../start.php';

if (!empty($_GET)) {

    $user = $_SESSION['udi'];
    $call = $_GET['id'];
    $desc = 'CHAMADO FINALIZADO';
            
    $insert = $db->prepare("INSERT INTO actions (user_id, call_id, desc_act, daytime) VALUES (? , ? , ? , NOW());");
    $insert->bindparam(1, $user, PDO::PARAM_INT);
    $insert->bindparam(2, $call, PDO::PARAM_INT);
    $insert->bindparam(3, $desc, PDO::PARAM_STR);
    $insert->execute();
    
    $update = $db->prepare("UPDATE calls SET modified = NOW(), status = 'C' WHERE id = ?");
    $update->bindparam(1, $call, PDO::PARAM_INT);
    $update->execute();
    
    require_once CONT_ROOT . '/calllist.php';
    
} else {
    
    echo '<script>';
    echo 'alert("Erro ao carregar dados para visualização!");';
    echo 'location.href="calllist.php"';
    echo '</script>';
    
}