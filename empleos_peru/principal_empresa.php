<?php
    include 'conectar.php';
    session_start();
    $ruc=$_SESSION['RUC'];
    $res=mysqli_query($con,"select * from empresa where RUC='$ruc'");
    $x=mysqli_fetch_row($res);
    $ruc=$x[0];
    include 'empresa_validar.php';
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
    <?php include 'menuempresa.php';?>
    <div class="empresa" >
    <img src="img/empresa.png" width= "20%" align= "left"margin-left= "20px">
    </div>
    <div class="cuerpo">
        <div class="cuerpodatos" align="center">
            <p><center><h2>Datos Personales</h2></center></p>
            <p>RUC: <?php echo $x[0];?></p>
            <p>Nombre de la empresa: <?php echo $x[1];?></p>
            <p>Nombre Accionista: <?php echo $x[2];?></p>
            <p>DNI: <?php echo $x[3];?></p>
        </div>
        <div class="imagenvision">
            <img src="img/vision.jpg" alt="">
        </div>
    </div>
</body>
<div class="imagen">
        <img src="img/pie.png" alt="" width="100%">
    </div>
</html>