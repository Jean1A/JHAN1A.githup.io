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
        DNI:<input type="text" name="dni" placeholder="dni"></p>
    	NOMBRES:<input type="text" name="nombres" placeholder="Nombres"></p>
        APELLIDOS:  <input type="text" name="apellidos" placeholder="Apellidos"></p>
    	EMAIL:      <input type="email" name="correo" placeholder="correoelectronico@gmail.com"></p>
        CONTRASEÑA: <input type="text" name="contraseña" placeholder="Contraseña"></p>
        DIRECCION:  <input type="text" name="direccion" placeholder="direccion"></p>
        TELEFONO:   <input type="text" name="numcelu" placeholder="Numero de celular"></p>
    	<input type="submit" name="crear">
    </form>
    <form action="principal.php" method="post">         
        <p><input type="submit" value="Salir" name="salir"></p>
    </form>
    
    
        <?php 
        include("crear2.php");
        ?>
</body>
<div class="imagen">
        <img src="img/pie.png" alt="" width="100%">
    </div>
</html>
