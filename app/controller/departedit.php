<?php

require_once '../start.php';

if (!empty($_GET)) {
    
    $departs = $db->query("SELECT * FROM depart WHERE id = ? ");
    $departs->bindparam(1, $_get['id'], PDO::PARAM_STR);
    $departs->execute();

    require_once VIEW_ROOT . '/depart/edit.php';
    
} else {

    echo '<script>';
    echo 'alert("Erro ao carregar dados para visualização!");';
    echo 'location.href="departlist.php"';
    echo '</script>';
    
}
