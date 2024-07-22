<?php
if ( !isset( $_SESSION['RUC'] ) ) {
    session_destroy();
    header("location: inicio_empresa.php");
  } 
?>