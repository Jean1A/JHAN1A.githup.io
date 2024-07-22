<?php
    include 'conectar.php';

    if (isset($_POST['crear'])) {
        if (strlen($_POST['inicio']) >= 1 ){
            $dni = trim($_POST['dni']);
            $inicio = trim($_POST['inicio']);
            $fin = trim($_POST['fin']);
            $duracion = trim($_POST['duracion']);
            $salario = trim($_POST['salario']);
            $actividad = trim($_POST['actividad']);
            $nombre = trim($_POST['nombre']); // Corrected variable name

            $res = mysqli_query($con, "SELECT * FROM contrato WHERE Fecha_inicio='$inicio'");
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                ?> 
                <h3 class="bad">¡El contrato ya existe!</h3>
                <?php
            } else {
                $res3=mysqli_query($con,"select * from contrato where dni='$dni'");
    $num=mysqli_num_rows($res3);
        $id=$num +1;
       
                $consulta = "INSERT INTO `contrato` (`Id_contrato`, `dni`, `Fecha_inicio`, `Fecha_fin`, `Duracion`, `Actividad`, `Salario`, `nombre_empresa`) 
                VALUES ('$id', '$dni', '$inicio', '$fin', '$duracion', '$actividad', '$salario', '$nombre')"; // Corrected table column name

                $resultado = mysqli_query($con, $consulta);

                if ($resultado) {
                    ?> 
                    <h3 class="ok">¡El contrato se ha inscrito correctamente!</h3>
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
