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
        <img src="img/img1.png" alt="" width="100%" ">
    </div>
    <?php include 'menuuser.php';?>
    <form method="post">
    	<h1>Asistencia</h1>
        <input type="text" name="dni" placeholder="dni"></p>
    	<input type="text" name="nombres" placeholder="Nombres"></p>
       <input type="datetime" name="fecha" id="" value="<?php echo date("Y-m-d H:i:s") ?>"></td></p>
    	<input type="submit" name="registrar">
    </form>
        <?php 
        include("asistencia2.php");
        ?>
       <div class="imagen">
        <img src="img/pie.png" alt="" width="100%">
    </div>
</body>
</html>
