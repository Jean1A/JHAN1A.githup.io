<?php
    include 'conectar.php';

    if (isset($_POST['crear'])) {
        if (strlen($_POST['dni']) >= 1 ){
            $dni = trim($_POST['dni']);
            $nombres = trim($_POST['nombres']);
            $apellidos = trim($_POST['apellidos']);
            $correo = trim($_POST['correo']);
            $contra = trim($_POST['contraseña']);
            $direc = trim($_POST['direccion']);
            $celu = trim($_POST['numcelu']);

            $res = mysqli_query($con, "SELECT * FROM Cliente WHERE Correoelectronico='$correo' AND Contraseña='$contra'");
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                ?> 
                <h3 class="bad">¡El correo y la contraseña ya existen!</h3>
                <?php
            } else {
                $consulta = "INSERT INTO Cliente (dni, Nombres, Apellidos, Correoelectronico, Contraseña, Direccion, Telefono) VALUES ('$dni', '$nombres', '$apellidos', '$correo', '$contra', '$direc', '$celu')";

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

