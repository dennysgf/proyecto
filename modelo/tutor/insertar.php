<?php 
    require "../../conexion/conexion.php";
    $nombres = $_POST['nombres'];
    try {
        $mysqli->query("insert into tutor (nombres )values('$nombres')");
            header("location:../../vista/tutor/v_tutor.php?registrado=Se ha añadido un tutor");    
    } catch (Throwable $th) {
        echo "error" . $th->getMessage();
    }