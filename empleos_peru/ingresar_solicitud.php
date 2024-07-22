<?php
    include 'conectar.php';
    session_start();
    $dni=$_SESSION['dni'];
    $res=mysqli_query($con,"select * from cliente where dni='$dni'");
    $x=mysqli_fetch_row($res);
    $dni=$x[0];
    //Validar la session
    include 'usuario_validar.php';
    if(isset($_POST['submit']))
    {
        $empresa=$_POST['empresa'];
        $motivo=$_POST['motivo'];
        $celular=($_POST['celu']);
        $fecha=date("Y-m-d H:i:s",time());
        $nombre_img="";
        $ruta="";
       
        //Validar la session
        $res3=mysqli_query($con,"select * from solicitud where dni='$dni'");
    $num=mysqli_num_rows($res3);
        $id=$num+1;
        include 'usuario_validar.php';    
        
    if($dni<>'')
    {
        if ( isset($_FILES['fileField']) && ! empty($_FILES['fileField']['tmp_name']) ) 
        {
            //archivo 01
            php_ini_loaded_file();
            $nombre_img = $_FILES['fileField']['name'];
            if($nombre_img=='')
                $ruta="";
            else
                {
                    $extension = pathinfo($nombre_img, PATHINFO_EXTENSION);
                    $nombre_img = $_FILES['fileField']['name'];
                    $tamano = $_FILES['fileField']['size'];
                    $directorio = 'documentos/';           
                    $ruta='documentos/'.$nombre_img; 
                    move_uploaded_file($_FILES['fileField']['tmp_name'],$directorio.$nombre_img);            
                }      
            }
            if(($ruta<>'') )
                {                    
                    mysqli_query($con,"INSERT INTO `solicitud` (`id_solicitud`, `dni`, `nombre_empresa`, `motivo`, `archivo`, `telefono`, `fecha`)
                     VALUES ('$id','$dni','$empresa','$motivo','$nombre_img','$celular','$fecha')");
                    $_SESSION['dni']=$dni;
                    
                    //echo "<script>alert('Datos enviados'.{$exp})</script>";
                    //echo "<script>location.href='mp_enviarrespuesta.php?dni={$dni}&exp={$exp}'</script>";
                }
                else
                    $messaje="Falta Cargar el archivo";    
        }
        else
            echo "<script>location.href='http://localhost/empleos_peru/principal.php'</script>";    

    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLEOS PERU</title>
    <link rel="stylesheet" href="style/estilo.css">
</head>
<body>
<div class="imagen">
        <img src="img/img1.png" alt="" width="100%"">
    </div>
    <?php include 'menuuser.php';?>
    <img src="img/solicitud.jpg" width= "30%" align= "left">
        <div class="formulario">
            <form action="" method="post" enctype="multipart/form-data">
                <table align="center">
                <p><center><h2>Datos Personales</h2></center></p>
                    <tr>
                        <td>Nom Empresa: </td>
                        <td><textarea name="empresa" placeholder="Nombre de la empresa"></textarea></td>
                    </tr>
                    <tr>
                        <td>Motivo :</td>
                        <td><input name="motivo"placeholder=""></td>
                    </tr>
                    <tr>
                        <td>Archivo </td>
                        <td><input type="file" name="fileField" id=""></td>
                    </tr>
                    <tr>
                        <td>Telefono :</td>
                        <td><input name="celu"placeholder=""></td>
                    </tr>
                    <tr>
                        <td>Fecha:</td>
                        <td><input type="datetime" name="fecha" id="" value="<?php echo date("Y-m-d H:i:s")?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Enviar Documento"></td>
                    </tr>
                    <?php 
        include("ingresar_solicitud2.php");
        ?>
                </table>
            </form>
        </div>
    </div>
    <div class="imagen">
        <img src="img/pie.png" alt="" width="100%">
    </div>
</body>
</html>