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
    <div class="cuerpo">   
        <table width="951" align="center" border="1" class="table table-dark table-hover" >
            <tr><h2>LISTA DE EMPLEADOS</h2>
            <td width="1" bgcolor="#503459"><div align="center"><strong>N°</strong></div></td>
                <td width="31" bgcolor="#503459"><div align="center"><strong>DNI</strong></div></td>
                <td width="31" bgcolor="#503459"><div align="center"><strong>Nombre</strong></div></td>
                <td width="31" bgcolor="#503459"><div align="center"><strong>Apellidos</strong></div></td>
                <td width="31" bgcolor="#503459"><div align="center"><strong>Direccion</strong></div></td>
                <td width="31" bgcolor="#503459"><div align="center"><strong>Telefono</strong></div></td>
                <td width="31" bgcolor="#503459"><div align="center"><strong>Estado</strong></div></td>
                <td width="151" bgcolor="#503459"><div align="center"><strong>Correo Electronico</strong></div></td>
               
            </tr>
        <?php 
            $num=1;
            $res=mysqli_query($con,"SELECT * FROM `cliente` ORDER BY `cliente`.`dni` DESC");
            while($y=mysqli_fetch_row($res)){            
        ?>
            <tr>
                <td><?php echo $num;$num++;?></td>
                <td><?php echo $y[0];?></td>
                <td><?php echo $y[1];?></td>
                <td><?php echo $y[2];?></td>
                <td><?php echo $y[4];?></td>
                <td><?php echo $y[5];?></td>
                <td><?php echo $y[6];?></td>
                <td><?php echo $y[7];?></div></td> </p>
               
                
            <?php 
                }
            ?>
        <div class="imagenvision">
            <img src="img/vision.jpg" alt="">
        </div>
    </div>
</body>
</html>