<?php
    include 'conectar.php';
    session_start();
    $dni=$_SESSION['dni'];
    $res=mysqli_query($con,"select * from Cliente where dni='$dni'");
    $x=mysqli_fetch_row($res);
    $dni=$x[0];
    include 'usuario_validar.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLEOS PERU</title>
    <link rel="stylesheet" href="style/estilo.css">
</head>
<body>
<div class="imagen">
        <img src="img/img1.png" alt="" width="100%"">
    </div>
    <?php include 'menuuser.php';?><br><br><br>
    <img src="img/usuario.jpg" width= "40%" align= "left">
    <div class="cuerpo">
        <div class="cuerpodatos" align= "center">
            <p><center><h2>Datos Personales</h2></center></p>
            <p>N° DNI: <?php echo $x[0];?></p>
            <p>Apellidos: <?php echo $x[2];?></p>
            <p>Nombres: <?php echo $x[1];?></p>
            <p>Correo Electronico: <?php echo $x[7];?></p>
            <p>N° Celular: <?php echo $x[5];?></p>
        </div>
        
    </div>
    <div class="imagen">
        <img src="img/pie.png" alt="" width="100%">
    </div>
</body>
</html>