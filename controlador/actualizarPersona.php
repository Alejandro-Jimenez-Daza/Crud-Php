<?php
if (!empty($_POST['btn-registrar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['dni']) && !empty($_POST['fecha']) && !empty($_POST['email'])) {

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha_nac = $_POST["fecha"];
        $email = $_POST["email"];

        $sql = $conexion->query("UPDATE persona set nombre = '$nombre', apellido = '$apellido', dni=$dni, fecha_nac='$fecha_nac', correo='$email' where id_persona=$id");

        if ($sql==1) {
            header("location:index.php");
        } else {
            echo '<div class="alert alert-danger">Error al modificar producto</div>';
        }
    }
    else
    {
        echo "<div class='alert alert-warning'>Campos Vacíos</div>";
    }
}
