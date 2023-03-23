<?php 
    require "../../conexion/conexion.php";
    $paralelo = $_POST['paralelo'];
    try {
        $mysqli->query("insert into paralelos (paralelo )values('$paralelo')");
            header("location:../../vista/paralelos/v_paralelo.php?registrado=Paralelo añadido");    
    } catch (Throwable $th) {
        echo "error" . $th->getMessage();
    }