<?php
    include 'conectar.php';

    if (isset($_POST['crear'])) {
        if (strlen($_POST['ruc']) >= 1 ){
            $ruc = trim($_POST['ruc']);
            $nombres = trim($_POST['nombres']);
            $encargado = trim($_POST['encargado']);
            $contraseña = trim($_POST['contraseña']);
            $dni = trim($_POST['dni']);
            

            $res = mysqli_query($con, "SELECT * FROM empresa WHERE nombre_empresa='$nombres' AND contraseña='$contraseña'");
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                ?> 
                <h3 class="bad">¡El ruc y el nombre ya existen!</h3>
                <?php
            } else {
                $consulta = "INSERT INTO `empresa` (`RUC`, `nombre_empresa`, `Nom_encargado`, `DNI`, `Contraseña`) VALUES ('$ruc', '$nombres', '$encargado', '$dni', '$contraseña');";

                $resultado = mysqli_query($con, $consulta);

                if ($resultado) {
                    ?> 
                    <h3 class="ok">¡Te has inscrito correctamente!</h3>
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

