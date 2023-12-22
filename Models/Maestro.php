<?php

namespace Models;

use Models\Database;

require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class Maestro
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

        $query = "SELECT usuarios.id, usuarios.nombre, usuarios.apellido, usuarios.email, usuarios.direccion, usuarios.nacimiento,   GROUP_CONCAT(materias.materia SEPARATOR ', ') AS materia
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

    public function materias()
    {

        $query = 'SELECT * FROM materias';


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
    public function update($nombre, $apellido, $direccion, $nacimiento,$id)
    {
        $query = "UPDATE `usuarios` SET `nombre`=?,`apellido`=?,`direccion`=?,`nacimiento`=? WHERE id = ?";

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$nombre, $apellido, $direccion, $nacimiento,$id]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    //eliminar un usuario
    public function delete($id)
    {

        $query = 'DELETE FROM `usuarios` WHERE id = ?';

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$id]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}
