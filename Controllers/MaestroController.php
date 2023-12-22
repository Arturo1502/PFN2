<?php

use Models\Roles;
use Models\Maestro;

require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class MaestroController
{
    //llamar todos los datos para cargar la tabla
    public function index()
    {
        $clientes = new Maestro;

        $data = $clientes->all();

        $materias = $clientes->materias();

        require_once $_SERVER['DOCUMENT_ROOT'] . '/Views/tablaMaestros.php';
    }

    // Mostrar un registro de la tabla
    public function show($id)
    {
        $usuario = new Maestro;
        $usuarioPar = $usuario->find($id);

        if ($usuarioPar) {
            $userData = "Nombre: " . $usuarioPar['nombre'] . "<br>";
            $userData = "Direccion: " . $usuarioPar['direccion'] . "<br>";
            $userData = "Telefono: " . $usuarioPar['telefono'] . "<br>";

            echo "Cliente: $userData";
        } else {
            echo "Cliente no encontrado";
        }
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
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];
        $nacimiento = $_POST['nacimiento'];
        $claseAsignada = $_POST['claseasignada'];


        $cliente = new Maestro;
        $cliente->update($nombre, $apellido, $direccion, $nacimiento, $claseAsignada,$id);

        header('location: ../index.php?controller=MaestroController&action=index');
    }

    // Eliminar un registro de la tabla
    public function destroy()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $usuario = new Maestro;
            $usuario->delete($id);


            header('location: ../index.php?controller=MaestroController&action=index');
        }
    }
}
