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
        <table width="951" align="center" border="1" class="table table-dark table-hover" >
            <tr><h2>DOCUMENTOS RECIBIDOS</h2>
            <td width="31" bgcolor="#503459"><div align="center"><strong>N°</strong></div></td>
                <td width="31" bgcolor="#503459"><div align="center"><strong>DNI</strong></div></td>
                <td width="137" bgcolor="#503459"><div align="center"><strong>Nombre empresa</strong></div></td>
                <td width="98" bgcolor="#503459"><div align="center"><strong>Motivo</strong></div></td>
                <td width="204" bgcolor="#503459"><div align="center"><strong>Archivo</strong></div></td>
                <td width="103" bgcolor="#503459"><div align="center"><strong>Telefono</strong></div></td>
                <td width="105" bgcolor="#503459"><div align="center"><strong>Fecha de Ingreso</strong></div></td>
            </tr>
        <?php 
            $num=1;
            $res=mysqli_query($con,"SELECT * FROM `solicitud` ORDER BY `solicitud`.`dni` ASC");
            while($y=mysqli_fetch_row($res)){            
        ?>
            <tr>
                <td><div align="center"><?php echo $num;$num++;?></div></td>
                <td><div align="center"><?php echo $y[1];?></div></td>
                <td><?php echo $y[2];?></td>
                <td><?php echo $y[3];?></td>
                <td><div align="center"><?php if($y[3]<>""){?><a href='<?php echo $y[4];?>' target='_blank'>Descargar</a><?php }?></div></td>
                <td><div align="center"><?php echo $y[5];?></div></td>
                <td><div align="center"><?php echo $y[6];?></div></td>
            </tr>
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