
<?php
    
    if(isset($_POST['Ingresar solicitud']))header('location:ingresar_solicitud.php');
    if(isset($_POST['Ofertas']))header('location:oferta_usuario.php');
    if(isset($_POST['Contrato']))header('location:contrato.php');
    if(isset($_POST['Asistencia']))header('location:asistencia.php');
    if(isset($_POST['volver']))header('location:principal_usuario.php');
    if(isset($_POST['Salir'])){
        session_destroy();
        header('location:inicio_usuario.php'); 
    }
?>
<div class="menus">
<link rel="stylesheet" href="style/estilo.css">
    <form action="ingresar_solicitud.php" method="post">         
        <p><input type="submit" value="Ingresar solicitud" name="Ingresar solicitud"></p>
    </form>
    <form action="oferta_usuario.php" method="post">         
        <p><input type="submit" value="Ofertas de Trabajo" name=" Ofertas "></p>
    </form>
    <form action="contrato.php" method="post">         
        <p><input type="submit" value="Contrato" name="Contrato"></p>
    </form>
    <form action="asistencia.php" method="post">         
        <p><input type="submit" value="Registrar asistencia" name="Asistencia"></p>
    </form>
    <form action="principal_usuario.php" method="post">         
    <p><input type="submit" value="Volver" name="volver"></p>
    </form>
    <form action="principal_usuario.php" method="post">         
        <p><input type="submit" value="Salir" name="Salir"></p>
    </form>
<br>
</div>