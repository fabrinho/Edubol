<?php
//se inicia la sesion para poder acceder a sus valores
session_start();
//se destruye la sesion actual
session_destroy();
//me redirecciono a index
header("location:index.php");
?>