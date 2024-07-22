<?php
    include 'conectar.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" cotent="width=device-width, initial-scale=1.0">
    <title>Empleos Peru</title>
    <link rel="stylesheet" href="style/estilo.css">
</head>
<body>
<div class="imagen">
        <img src="img/img1.png" alt="" width="100%"">
    </div>
    <?php include 'menuempresa.php';?> 
    <div class="cuerpo"> 
    <img src="img/oferta.png" width= "20%" align= "left">  
    <div class="formulario" align="center">
            <center><form action="" method="post" align="left">
            <h1>¡Nueva oferta de empleo!</h1>
                <table>
                    <tr>
                        <td>NOMBRE EMPRESA:</td>
                        <td><textarea name="empresa" placeholder="Nombre de la empresa"></textarea></td></tr>
                    <tr>
                        <td>ACTIVIDAD:</td>
                        <td><textarea name="actividad" placeholder="Actividad a realizar"></textarea></td></tr>
                    </tr>
                    <tr>
                        <td>DURACION</td>
                        <td><textarea name="duracion" placeholder="Duracion del contrato"></textarea></td></tr>
                    </tr>

                    <tr>
                        <td>FECHA:</td>
                        <td><input type="datetime" name="fecha" id="" value="<?php echo date("Y-m-d H:i:s") ?>"></td>
                    </tr>
                    <tr>
                        <td>ESTADO</td>
                        <td><textarea name="Estado" placeholder="Estado de la oferta"></textarea></td></tr>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="subir" value="Subir Oferta"></td>
                    </tr>
                    
                </table></center>
            </form>
            <form action="principal_empresa.php" method="post">         
        <p><input type="submit" value="Volver" name="volver"></p>
    </form>
        </div>
        <?php 
        include("oferta2.php");
        ?>
        <div class="imagen">
        <img src="img/pie.png" alt="" width="100%">
    </div>
</body>
</html>