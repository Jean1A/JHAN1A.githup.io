<?php
    include 'conectar.php';
    session_start();
    $ruc=$_SESSION['RUC'];  
    //Validar la session
    include 'empresa_validar.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleos Peru</title>
    <link rel="stylesheet" href="style/estilo.css">
</head>
<body>
<div class="imagen">
        <img src="img/img1.png" alt="" width="100%"">
    </div>
    <?php include 'menuempresa.php';?>
    <div class="cuerpo">
    <h2>ASISTENCIA</h2>
    <table width="951" align="center" border="1" class="table table-dark table-hover" >
            <td width="31" bgcolor="#503459"><div align="center"><strong>N°</strong></div></td>
                <td width="31" bgcolor="#503459"><div align="center"><strong>DNI</strong></div></td>
                <td width="31" bgcolor="#503459"><div align="center"><strong>Nombre empresa</strong></div></td>
                <td width="31" bgcolor="#503459"><div align="center"><strong>Fecha de Ingreso</strong></div></td>
                
            </tr>
        <?php 
            $num=1;
            $res=mysqli_query($con,"SELECT * FROM `asistencia` ORDER BY `asistencia`.`dni` ASC");
            while($y=mysqli_fetch_row($res)){            
        ?>
            <tr>
                <td><?php echo $num;$num++;?></td>
                <td><?php echo $y[1];?></td>
                <td><?php echo $y[2];?></td>
                <td> <?php echo $y[3];?></div></td>
               
                
            <?php
                }
            ?>
        </table>
       
    </div> 
    <div class="imagen">
        <img src="img/pie.png" alt="" width="100%">
    </div>
</body>
</html>