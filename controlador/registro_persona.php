<?php
if (!empty($_POST['btn-registrar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['dni']) && !empty($_POST['fecha']) && !empty($_POST['email'])) {

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha_nac = $_POST["fecha"];
        $email = $_POST["email"];

        $sql = $conexion->query("INSERT INTO persona(nombre, apellido, dni, fecha_nac, correo) VALUES ('$nombre', '$apellido', '$dni', '$fecha_nac', '$email')");

        if ($sql) {
            echo '<div class="alert alert-success">Persona registrada exitosamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar la persona. Por favor, revisa el código.</div>';
        }
    } else {
        echo '<div class="alert alert-danger">Alguno de los campos está vacío</div>';
    }
}
