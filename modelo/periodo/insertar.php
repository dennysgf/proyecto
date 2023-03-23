<?php 
    require "../../conexion/conexion.php";
    $periodo = $_POST['periodo'];
    try {
        $mysqli->query("insert into periodos (periodo )values('$periodo')");
            header("location:../../vista/periodo/v_periodo.php?registrado=Periodo lectivo registrado");    
    } catch (Throwable $th) {
        echo "error" . $th->getMessage();
    }