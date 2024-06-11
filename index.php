<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3f0aea6cb1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: #212529;">
    <script src="js/index.js"></script>
    <div class="titulo-pagina">
        <h1 class="text-center p-3 text-info" id="titulo-head">PERSONAS INGRESADAS</h1>
    </div>
    <?php

    include 'modelo/conexion.php';
    include 'controlador/eliminarPersona.php';
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="post">
            <h3 class="text-center text-light">Registro de personas</h3>
            <?php
            include 'controlador/registro_persona.php';
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Apellidos</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">DNI</label>
                <input type="text" class="form-control" name="dni">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Email</label>
                <input type="email" class="form-control" name="email">
            </div>

            <button type="submit" class="btn btn-primary mt-3" name="btn-registrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRES</th>
                        <th scope="col">APELLIDOS</th>
                        <th scope="col">CÉDULA</th>
                        <th scope="col">FECHA DE NACIMIENTO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("SELECT * FROM persona");
                    while ($data = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $data->id_persona ?></td>
                            <td><?= $data->nombre ?></td>
                            <td><?= $data->apellido ?></td>
                            <td><?= $data->dni ?></td>
                            <td><?= $data->fecha_nac ?></td>
                            <td><?= $data->correo ?></td>
                            <td>
                                <a href="modificar.php?id=<?= $data->id_persona ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="index.php?id=<?= $data->id_persona ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>