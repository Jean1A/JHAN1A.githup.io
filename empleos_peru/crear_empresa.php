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
    <div class="menus" >
    <form action="inicio_usuario.php" method="post">         
        <p><input type="submit" value="Inicio Sesion" name="Inicio Sesion"></p>
    </form>
    <form action="inicio_empresa.php" method="post">         
        <p><input type="submit" value="Iniciar sesion como empresa" name="ingresar empresa"></p>
    </form>
    <form action="crear_cuenta.php" method="post">         
        <p><input type="submit" value="crear cuenta" name="crear cuenta"></p>
    </form>
    <form action="crear_empresa.php" method="post">         
        <p><input type="submit" value="Crear cuenta como empresa" name="crear empresa"></p>
    </form>
        <br>
</div>
<div class="crear">
    <img src="img/crea_cuenta.jpg" width= "30%" align= "left">
    <form method="post" align= "rigth" border="100px">
    	<h1>¡Registrate! </h1>
        RUC:<input type="text" name="ruc" placeholder="ruc"></p>
    	NOMBRE EMPRESA:<input type="text" name="nombres" placeholder="Nombre empresa"></p>
        NOMBRE ACCIONISTA:  <input type="text" name="encargado" placeholder="Nombre_accionista"></p>
    	CONTRASEÑA:      <input type="text" name="contraseña" placeholder=""></p>
        DNI:      <input type="text" name="dni" placeholder=""></p>
    	<input type="submit" name="crear">
    </form>
    <form action="principal.php" method="post">         
        <p><input type="submit" value="Salir" name="salir"></p>
    </form>
    
    
        <?php 
        include("crearemp2.php");
        ?>
</body>
<div class="imagen">
        <img src="img/pie.png" alt="" width="100%">
    </div>
</html>
