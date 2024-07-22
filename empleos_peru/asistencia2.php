<?php
    include 'conectar.php';

    if (isset($_POST['registrar'])) {
        if (strlen($_POST['dni']) >= 1) {
            $dni = trim($_POST['dni']);
            $nombres = trim($_POST['nombres']);
            $fecha = date("Y-m-d");

            $res = mysqli_query($con, "SELECT * FROM asistencia WHERE dni='$dni' AND nombre='$nombres'");
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                ?> 
                <h3 class="bad">¡La asistencia ya fue registrada!</h3>
                <?php
            } else {
                $consulta = "INSERT INTO asistencia (dni, nombre, fecha_asistencia) VALUES ('$dni', '$nombres', '$fecha')";

                $resultado = mysqli_query($con, $consulta);

                if ($resultado) {
                    ?> 
                    <h3 class="ok">¡Lasistencia se ah registrado correctamente!</h3>
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
