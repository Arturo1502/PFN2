<?php

use Models\Roles;
use Models\Materia;

require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class MateriaController
{
    //llamar todos los datos para cargar la tabla
    public function index()
    {
        $clientes = new Materia;

        $data = $clientes->all();

        $maestros = $clientes->maestros();

        require_once $_SERVER['DOCUMENT_ROOT'] . '/Views/tablaMaterias.php';
    }


    // Mostrar un registro de la tabla
    public function show($id)
    {
        $usuario = new Materia;
        $usuarioPar = $usuario->find($id);

        require_once $_SERVER['DOCUMENT_ROOT'] . 'Views/maestros.php';
    }

    // actializar un registro

    public function updateView()
    {
        $roles = new Roles;
        $data = $roles->all();
        require_once $_SERVER['DOCUMENT_ROOT'] . '/Views/update.php';
    }


    public function update()
    {
        $id = $_GET['id'];
        $correo = $_POST['correo'];
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $rol_id = $_POST['rol'];

        $cliente = new Materia;
        $cliente->update($id, $correo, $hash, $rol_id);

        header('location: ../index.php?controller=UserController&action=index');
    }

    // Eliminar un registro de la tabla
    public function destroy()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $usuario = new Materia;
            $usuario->delete($id);


            header('location: ../index.php?controller=UserController&action=index');
        }
    }

    public function store()
    {
        $materia =  $_POST['materia'];

        $maestro =  $_POST['maestro'];



        $auth = new Materia;
        $auth->register($materia, $maestro);

        header('location: ../index.php?controller=MateriaController&action=index');
    }
}
