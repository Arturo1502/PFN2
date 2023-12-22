<?php

namespace Models;

use Models\Database;

require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class Materia
{
    private $conexion;

    public function __construct()
    {
        $database = new Database;
        $this->conexion = $database->getConn();
    }

    // cargar todo los usuarios
    public function all()
    {

        $query = "SELECT usuarios.id, GROUP_CONCAT(materias.materia SEPARATOR ', ') AS materia, usuarios.nombre, usuarios.apellido
        FROM usuarios
        JOIN materias ON materias.usuario_id = usuarios.id
        WHERE usuarios.rol_id = 2
        GROUP BY usuarios.id";


        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute();
            $rs = $stm->fetchAll(\PDO::FETCH_ASSOC);

            return $rs;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function maestros()
    {

        $query = 'SELECT * FROM usuarios WHERE rol_id = 2';


        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute();
            $rs = $stm->fetchAll(\PDO::FETCH_ASSOC);

            return $rs;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    // encontrar el usuario donde el id se igual a ?
    public function find($id)
    {

        $query = 'SELECT * FROM usuarios Where id = ?';

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$id]);
            $rs = $stm->fetchAll(\PDO::FETCH_ASSOC);

            return $rs;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    //actualizar un usuario
    public function update($id, $correo, $password, $rol_id)
    {
        $query = "UPDATE usuarios SET correo = ?, password = ?, rol_id = ? WHERE id = ?";

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$correo, $password, $rol_id, $id]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    //eliminar un usuario
    public function delete($id)
    {

        $query = 'DELETE FROM usuarios WHERE id = ?';

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$id]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function register($materia, $maestro)
    {
        $query = "INSERT INTO `materias`(`materia`, `usuario_id`) VALUES (?,?)";

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$materia, $maestro]);

            return true;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}
