
<?php
    if(isset($_POST['Ingresar oferta']))header('location:oferta_empresa.php');
    if(isset($_POST['Lista Empleados']))header('location:lista_empleados.php');
    if(isset($_POST['Recibo de documentos']))header('location:recibo_documentos.php');
    if(isset($_POST['Control de asistencia']))header('location:control_asistencia.php');
    if(isset($_POST['Crear contrato']))header('location:crear_contrato.php');
    if(isset($_POST['volver']))header('location:principal_empresa.php');
    if(isset($_POST['salir'])){
        session_destroy();
        header('location:ingreso_mesa.php'); 
    }
?>
<div class="menus">
<link rel="stylesheet" href="style/estilo.css">

<form action="oferta_empresa.php" method="post">         
        <p><input type="submit" value="Ingresar oferta" name="Ingresar"></p>
    </form>
    <form action="lista_empleados.php" method="post">         
        <p><input type="submit" value="Lista empleados" name="Lista Empleados"></p>
    </form>
    <form action="recibo_documentos.php" method="post">         
        <p><input type="submit" value="Recibo de documentos" name="Recibo de documentos"></p>
    </form>
    <form action="control_asistencia.php" method="post">         
    <p><input type="submit" value="Asistencias" name="Control de asistencia"></p>
    </form>
    <form action="crear_contrato.php" method="post">         
        <p><input type="submit" value="contrato" name="crear contrato"></p>
    </form>
    <form action="principal_empresa.php" method="post">         
    <p><input type="submit" value="Volver" name="volver"></p>
    </form>
    <form action="principal.php" method="post">         
    <p><input type="submit" value="Salir" name="salir"></p>
    </form>
        <br>
    </div>