<?php

session_start();
if (isset($_SESSION['userData'])) {
    $userData = $_SESSION['userData'];

    $cliente  = ['Clases' => 'index.php?'];
    $admin = ['Permisos' => 'index.php?', 'Maestros' => 'index.php?controller=MaestroController&action=index', 'Alumnos' => 'index.php?', 'Clases' => 'index.php?controller=MateriaController&action=index'];

    if ($userData['rol_id'] === 1) {
        $menu = $admin;
    } else if ($userData['rol_id'] === 2) {
        $menu = $cliente;
    }
} else {
    echo 'error en datos de credenciales';
    header('location: ./Views/login.php');
}


require_once  $_SERVER['DOCUMENT_ROOT'] . '/Views/templates/header.php';

if (isset($_GET['action']) && isset($_GET['controller'])) {

    require_once './Controllers/' . $_GET['controller'] . '.php';

    $controller = new $_GET['controller'];

    $controller->{$_GET['action']}();
} else {
    require_once './Views/dashboard.php';
}
require_once  $_SERVER['DOCUMENT_ROOT'] . '/Views/templates/footer.php';
