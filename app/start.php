<?php

ini_set('display_errors', 'On');

define('APP_ROOT',__DIR__);
define('VIEW_ROOT', APP_ROOT .'/views');
define('CONT_ROOT', APP_ROOT.'/controller');
define('BASE_URL', 'http://localhost/tarefas');
//define('BASE_URL', 'http://rat.rapenteado.com.br');

/*
 * SERVIDOR LOCAL
 */
$dsn = ('mysql:dbname=suporte;host=127.0.0.1');
$user = 'root';
$password = '';

/*
 * SERVIDOR NA WEB
 *
$dsn = 'mysql:dbname=u634654238_site;host=mysql.hostinger.com.br';
$user = 'u634654238_site';
$password = 'rapenteado';*/

try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro de conexão: ' . $e->getMessage();
}

session_start();

//var_dump($db);


/*if (!$_SESSION['login']){
    header('location:' . BASE_URL . '/app/controller/login.php');
}*/