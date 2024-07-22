<?php
    include 'conectar.php'; 
    
    if(isset($_POST['submit']))
    {
        $correo=$_POST['txt_cor'];
        $contra=$_POST['txt_con']; 
        $res=mysqli_query($con,"select * from Cliente where Correoelectronico='$correo' and Contraseña='$contra'");
        $num=mysqli_num_rows($res);
        if($num==1)
        {
            $x=mysqli_fetch_row($res);
            $dni=$x[0];
            
            session_start();
            $_SESSION['dni']=$dni;
            header('location:principal_usuario.php'); 
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
    <title>empleos peru</title>
    <link rel="stylesheet" href="style/estilo.css">
</head>
<body>
<div class="imagen">
        <img src="img/img1.png" alt="" width="100%"">
    </div>
    <div class="formulario">
        <form action="" method="post">            
            <p>Correo Electronico:</p>
            <p><input type="email" name="txt_cor" id="" size="40px" required placeholder="Correoelectronico@gmail.com"></p>
            <p>Contraseña</p>
            <p><input type="password" name="txt_con" id="" required></p>
            <br>
            <p><input type="submit" value="Ingresar" name="submit"></p>
            <br>
        </form>
    </div>
    <div class="botones">
        <br>&nbsp;<center>
        <a href="recuperar_contra.php">Recuperar Contraseña</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="usuario_nuevo.php">Nuevo Usuario</a></center>
        <br>
    </div>
    <div class="imagen">
        <img src="img/pie.png" alt="" width="100%">
    </div>
</body>
</html>
