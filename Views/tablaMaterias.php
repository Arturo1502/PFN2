<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
</head>
<style>
    .table {
        width: 90%;
        margin: 20px auto;
        padding: 0;
    }

    .nav {
        background-color: #007bff;
        border: 1px solid gray;
        height: 40px;
        text-align: left;
    }

    /* Estilos adicionales... */
</style>

<body>
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <h2 class="titulo">Lista de Materias</h2>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <!-- <button href="../index.php?controller=AuthController&action=create" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Nuevo Usuario
                </button> -->
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar clase
                </button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Clase</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="../index.php?controller=MateriaController&action=store" method="post">
                            <div class="mb-3">
                                <label for="email">Nombre de la materia</label>
                                <input type="text" name="materia" class="form-control" placeholder="Ingresa materia">
                            </div>

                            <select name="maestro" class="form-select">
                                <option value="" disabled selected>Select Maestro</option>
                                <?php foreach ($maestros as $maestro) : ?>
                                    <option value="<?= $maestro['id'] ?>"><?= $maestro['nombre'] . " " . $maestro['apellido'] ?></option>
                                <?php endforeach; ?>
                            </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-secondary">enviar</button>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tu tabla existente -->
    <div class="row">
        <div class="col-12">
            <table id="datatable_users" class="table table-striped">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th class="text-center">#</th>
                        <th>Clase</th>
                        <th>Maestro</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($data as $usuario) : ?>
                        <tr>
                            <td><?= $usuario['id'] ?></td>
                            <td><?= $usuario['materia'] ?></td>
                            <td><?php if (!isset($usuario['nombre'])) : ?>
                                    <p>Sin asinación</p>
                                <?php else : ?>
                                    <?= $usuario['nombre'] . " " . $usuario['apellido'] ?>
                                <?php endif; ?>
                            </td>

                            <td>
                                <a href="../index.php?controller=UserController&action=updateView&id=<?= $usuario['id'] ?>" class="fa-regular fa-pen-to-square" style="color: green;"></a>
                                <a href="../index.php?controller=UserController&action=destroy&id=<?= $usuario['id'] ?>" class="fa-solid fa-trash-can " style="color: rgb(170, 11, 11);;"></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <!-- Scripts JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#datatable_users').DataTable({
                lengthMenu: [5, 10, 15, 20],
                searching: true,
                pageLength: 10
            });
        });
    </script>
</body>

</html>

<!-- <a href="../index.php?controller=AuthController&action=create" class="btn btn-secondary">Nuevo Usuario</a> -->