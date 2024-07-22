<?php
if ( !isset( $_SESSION['dni'] ) ) {
    session_destroy();
    header("location: inicio_usuario.php");
  } 
?>