<?php

use Models\Auth;
use Models\Roles;

require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';


class AuthController
{
    public function login()
    {

        $email =  $_POST['email'];

        $password =  $_POST['password'];

        $auth = new Auth;
        $user = $auth->select($email);

        if (password_verify($password, $user['password'])) {

            session_start();
            $_SESSION['userData'] =  $user;

            header('location: ../index.php');
        } else {
            header('location: ../index.php');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('location: ../index.php');
    }


    public function create()
    {

        $roles = new Roles;

        $data =  $roles->all();

        require_once $_SERVER['DOCUMENT_ROOT'] . '/Views/registrar.php';
    }


    public function store()
    {
        $nombre =  $_POST['nombre'];
        $apellido =  $_POST['apellido'];
        $email =  $_POST['email'];
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $direccion =  $_POST['direccion'];
        $nacimiento = $_POST['nacimiento'];
        $rol_id =  $_POST['rol'];
        // $asignatura_id = $_POST['asignatura_id'];


        $auth = new Auth;
        $auth->register($nombre, $apellido, $email, $hash, $direccion, $nacimiento, $rol_id);

        header('location: ../index.php?controller=MaestroController&action=index');
    }
}
