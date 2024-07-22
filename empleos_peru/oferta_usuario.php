<?php
    include 'conectar.php';
    session_start();
    $dni=$_SESSION['dni'];
    $res=mysqli_query($con,"select * from cliente where dni='$dni'");
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
            <?php include 'menuuser.php';?> 
            <table width="951" align="center" border="1" class="table table-dark table-hover" > <br><br>
    <div class="cuerpo"> 
    <img src="img/oferta.png" width= "20%" align= "left">  
        <tr><h2>LISTA DE OFERTAS</h2>
            <td width="1" bgcolor="#7178df"><div align="center"><strong>N°</strong></div></td>
                <td width="31" bgcolor="#7178df"><div align="center"><strong>Nombre de la empresa</strong></div></td>
                <td width="31" bgcolor="#7178df"><div align="center"><strong>Actividad</strong></div></td>
                <td width="31" bgcolor="#7178df"><div align="center"><strong>Duracion</strong></div></td>
                <td width="31" bgcolor="#7178df"><div align="center"><strong>Fecha de publicacion</strong></div></td>
                <td width="151" bgcolor="#7178df"><div align="center"><strong>Estado</strong></div></td>
               
            </tr>
        <?php 
            $num=1;
            $res=mysqli_query($con,"SELECT * FROM `ofertas_de_empleo` ORDER BY `ofertas_de_empleo`.`Id_codigo` ASC");
            while($y=mysqli_fetch_row($res)){            
        ?>
            <tr>
                <td><?php echo $num;$num++;?></td>
                <td><?php echo $y[1];?></td>
                <td><?php echo $y[2];?></td>
                <td><?php echo $y[3];?></td>
                <td><?php echo $y[4];?></td>
                <td><?php echo $y[5];?></td></p>
               
                
            <?php 
                }
            ?>
        </div>
    </div>
</body>

</html>
