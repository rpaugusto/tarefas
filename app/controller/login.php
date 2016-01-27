<?php

require_once '../start.php';


if (!empty($_POST)) {

    $login = $_POST['user'];
    $passwd = sha1(md5($_POST['passwd']));
    echo ($login);

    $user = $db->prepare("SELECT * FROM users u LEFT JOIN log l ON l.user_id = u.id WHERE login = ? ");
    $user->bindParam(1, $login, PDO::PARAM_STR);
    $user->execute();
    $user = $user->fetch(PDO::FETCH_ASSOC);

    if ($user['passwd'] == $passwd) {

        $_SESSION['login'] = TRUE;
        $_SESSION['level'] = $user['level'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['log'] = $user['date'];
        $_SESSION['udi'] = $user['id'];
        //echo 'passei!';

        /* comandos desativados criado procedure para 
         * alimenta tabela de log ao cadastrar usuario
         * if (!empty($user['user_id'])) {
         *    $user = $db->prepare("UPDATE log SET date = NOW() WHERE user_id = ?");
         *    $user->bindParam(1, $id, PDO::PARAM_INT);
         *    $user->execute();
         * } else {
         *    $user = $db->prepare("INSERT INTO log (date, user_id) VALUES (NOW(),?)");
         *    $user->bindParam(1, $id, PDO::PARAM_INT);
         *    $user->execute();
         * }
         */

        if ($user['active'] == 1) {
            
            $user = $db->prepare("UPDATE log SET date = NOW() WHERE user_id = ?");
            $user->bindParam(1, $id, PDO::PARAM_INT);
            $user->execute();

            header('location: ' . BASE_URL);
        } else {
            echo '<center><div class="alert alert-warning" role="alert">USUARIO BLOQUEADO!</div></center>';
        }
    }
    
    //var_dump($user);
    
    if (!$user) {
        echo '<center><div class="alert alert-danger" role="alert">USUARIO INVALIDO!</div></center>';
    } else {
        echo '<center><div class="alert alert-danger" role="alert">SENHA INCORRETA!</div></center>';
    }
}


require_once VIEW_ROOT . '/admin/login.php';
