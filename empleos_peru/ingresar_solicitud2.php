<?php
    include 'conectar.php';

    if (isset($_POST['submit'])) {
        if (strlen($_POST['empresa']) >= 1 ) {
            

            $res = mysqli_query($con, "SELECT * FROM Solicitud WHERE archivo='$ruta'");
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                ?> 
                <h3 class="bad">¡El archivo ya fue enviado!</h3>
                <?php
            } else {
                $consulta = "SELECT * FROM `solicitud` WHERE `archivo`='$ruta'";

                $resultado = mysqli_query($con, $consulta);

                if ($resultado) {
                    ?> 
                    <h3 class="ok">¡El archivo se ah enviado correctamente!</h3>
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
