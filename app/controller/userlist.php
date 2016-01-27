<?php

require_once '../start.php';

if (!$_SESSION['login']) {

    header('location:' . BASE_URL . '/admin/login.php');
}

$users = $db->query("SELECT * FROM users u LEFT JOIN log l ON l.user_id = u.id");
$users->execute();

require_once VIEW_ROOT . '/admin/list.php';