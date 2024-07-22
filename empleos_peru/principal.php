<?php
    include 'conectar.php'; 
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Busca empleo</title>
    <link rel="stylesheet" href="style/estilo.css">
</head>
<body>
    <header>
    <div class="imagen">
        <img src="img/img1.png" alt="" width="100%"">
    </div>
        <h1>¡Encuentra tu próximo empleo!</h1>
    </header>
   
    <div class="menus" >
    <form action="inicio_usuario.php" method="post">         
        <p><input type="submit" value="Inicio Sesion" name="Inicio Sesion"></p>
    </form>
    <form action="inicio_empresa.php" method="post">         
        <p><input type="submit" value="Iniciar sesion empresa" name="ingresar empresa"></p>
    </form>
    <form action="crear_cuenta.php" method="post">         
        <p><input type="submit" value="Crear cuenta" name="crear cuenta"></p>
    </form>
    <form action="crear_empresa.php" method="post">         
        <p><input type="submit" value="Crear cuenta empresa" name="crear empresa"></p>
    </form>
        <br>
</div>
    <section>
        <h3><a href="https://www.bumeran.com.pe/empleos.html">Explora las ofertas laborales que tenemos para ti</a></h3>
        <h2><p>¡Vacantes Disponibles!</p></h2>
    </section>
    <div class="inicio">
        <img src="img/inicio.png" alt="">
    </div>
    <div class="imagen">
        <img src="img/pie.png" alt="" width="100%">
    </div>
</body>
</html>