<?php
    include 'conectar.php';

    if (isset($_POST['subir'])) {
        if (strlen($_POST['actividad']) >= 1) {
            $empresa = trim($_POST['empresa']);
            $actividad = trim($_POST['actividad']);
            $duracion = trim($_POST['duracion']);
            $fecha = date("Y-m-d");
            $estado = trim($_POST['Estado']);
           

            $res = mysqli_query($con, "SELECT * FROM ofertas_de_empleo WHERE Actividad='$actividad' AND Estado='$estado'");
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                ?> 
                <h3 class="bad">¡La oferta ya fue creada!</h3>
                <?php
            } else {
                $consulta = "INSERT INTO ofertas_de_empleo ( Nombre_empresa, Actividad, Duracion, Fecha_publicacion, Estado) VALUES 
                ('$empresa', '$actividad', '$duracion', '$fecha', '$estado')";

                $resultado = mysqli_query($con, $consulta);

                if ($resultado) {
                    ?> 
                    <h3 class="ok">¡La oferta se ah subido correctamente!</h3>
                    <?php
                } else {
                    ?> 
                    <h3 class="bad">¡Ups, ha ocurrido un error!</h3>
                    <?php
                }
            }
        } else {
            ?> 
            <h3 class="bad">¡Por favor, complete los campos!</h3>
            <?php
        }
    }
?>