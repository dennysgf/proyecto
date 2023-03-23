<?php 
    require "../../conexion/conexion.php";
    $seccion = $_POST['seccion'];
    try {
        $mysqli->query("insert into secciones (seccion )values('$seccion')");
            header("location:../../vista/secciones/v_seccion.php?registrado=Seccion añadido");    
    } catch (Throwable $th) {
        echo "error" . $th->getMessage();
    }