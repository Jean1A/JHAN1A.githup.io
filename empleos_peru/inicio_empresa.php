<?php
    include 'conectar.php'; 
    
    if(isset($_POST['submit']))
    {
        $empresa=$_POST['txt_cor'];
        $contra=$_POST['txt_con']; 
        $res=mysqli_query($con,"select * from empresa where nombre_empresa='$empresa' and Contraseña='$contra'");
        $num=mysqli_num_rows($res);
        if($num==1)
        {
            $x=mysqli_fetch_row($res);
            $ruc=$x[0];
            
            session_start();
            $_SESSION['RUC']=$ruc;
            header('location:principal_empresa.php'); 
            exit();
        }
        else
        {
            echo '<script>alert("Usuario Incorrecto ")</script>';
        }
    }
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
    <div class="menus" >
    <form action="inicio_usuario.php" method="post">         
        <p><input type="submit" value="Inicio Sesion" name="Inicio Sesion"></p>
    </form>
    <form action="inicio_empresa.php" method="post">         
        <p><input type="submit" value="Iniciar sesion como empresa" name="ingresar empresa"></p>
    </form>
    <form action="crear_cuenta.php" method="post">         
        <p><input type="submit" value="Crear cuenta" name="crear cuenta"></p>
    </form>
    <form action="crear_empresa.php" method="post">         
        <p><input type="submit" value="Crear cuenta como empresa" name="crear empresa"></p>
    </form>
    <form action="crear_contrato.php" method="post">         
        <p><input type="submit" value="Crear contrato" name="crear contrato"></p>
    </form>
        <br>
</div>
    <div class="formulario">
        <form action="" method="post">            
            <p>Nombre Empresa:</p>
            <p><input type="text" name="txt_cor" id="" size="40px" required placeholder="Nombre Empresa"></p>
            <p>Contraseña</p>
            <p><input type="password" name="txt_con" id="" required></p>
            <br>
            <p><input type="submit" value="Ingresar" name="submit"></p>
            <br>
        </form>
    </div>
    <div class="botones">
        <br>&nbsp;<center>
        <a href="usuario_nuevo.php">Nuevo Usuario</a></center>
        <br>
    </div>
</body>
<div class="imagen">
        <img src="img/pie.png" alt="" width="100%">
    </div>
</html>
