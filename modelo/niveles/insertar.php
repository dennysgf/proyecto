<?php 
    require "../../conexion/conexion.php";
    $nivel = $_POST['nivel'];
    try {
        $mysqli->query("insert into niveles (nivel )values('$nivel')");
            header("location:../../vista/nivel/v_nivel.php?registrado=Nivel añadido");    
    } catch (Throwable $th) {
        echo "error" . $th->getMessage();
    }