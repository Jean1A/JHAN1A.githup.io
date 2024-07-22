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
        <img src="img/img1.png" alt="" width="100%">
    </div>
    <?php include 'menuuser.php';?>
       <?php $res=mysqli_query($con,"select * from contrato where dni='$dni'");
    $y=mysqli_fetch_row($res);?>
      
        <table width="951" align="center" border="1" class="table table-dark table-hover" >
        <tr><h2>LISTA DE CONTRATOS</h2>
        <img src="img/contrata.jpg" width= "20%" align= "left">
        <div class="cuerpo"> 
            <td width="1" bgcolor="#503459"><div align="center"><strong>N°</strong></div></td>
                <td width="31" bgcolor="#503459"><div align="center"><strong>DNI</strong></div></td>
                <td width="151" bgcolor="#503459"><div align="center"><strong>FECHA INICIO</strong></div></td>
                <td width="151" bgcolor="#503459"><div align="center"><strong>FECHA FIN</strong></div></td>
                <td width="151" bgcolor="#503459"><div align="center"><strong>DURACION</strong></div></td>
                <td width="31" bgcolor="#503459"><div align="center"><strong>ACTIVIDAD</strong></div></td>
                <td width="151" bgcolor="#503459"><div align="center"><strong>SALARIO</strong></div></td>
                <td width="151" bgcolor="#503459"><div align="center"><strong>NOMBRE DE LA EMPRESA</strong></div></td>
               
            </tr>
        <?php 
            $num=1;
            
            $res=mysqli_query($con,"SELECT * FROM `contrato` WHERE dni=$dni ORDER BY `contrato`.`dni` ASC");
            while($y=mysqli_fetch_row($res)){            
        ?>
            <tr>
                <td><?php echo $num;$num++;?></td>
                <td><?php echo $y[1];?></td>
                <td><?php echo $y[2];?></td>
                <td><?php echo $y[3];?></td>
                <td><?php echo $y[4];?></td>
                <td><?php echo $y[5];?></td>
                <td><?php echo $y[6];?></td>
                <td><?php echo $y[7];?></div>
                </td> </p>
               
                
            <?php 
                }
            ?>
    </div>
   
</body>

</html>