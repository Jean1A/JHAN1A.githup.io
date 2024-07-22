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
<div class="crear">
    <img src="img/contrata.jpg" width= "50%" align= "left">
    <form method="post" align= "rigth" border="100px">
    	<h1>¡Ingresar nuevo contrato! </h1>
        DNI:<input type="text" name="dni" placeholder="dni"></p>
    	FECHA INICIO:<input type="date" name="inicio" placeholder="   /   /"></p>
        FECHA FIN:  <input type="date" name="fin" placeholder="   /  /"></p>
        DURACION:  <input type="text" name="duracion" placeholder=""></p>
        SALARIO: <input type="text" name="salario" placeholder="S/.000.00"></p>
        ACTIVIDAD: <input type="text" name="actividad" placeholder=""></p>
        NOMBRE EMPRESA:<input type="text" name="nombre" placeholder=""></p>
    	<input type="submit" name="crear">
    </form>
        <?php 
        include("crearcontrato.php");
        ?>
</body>
<div class="imagen">
        <img src="img/pie.png" alt="" width="100%">
    </div>
</html>
