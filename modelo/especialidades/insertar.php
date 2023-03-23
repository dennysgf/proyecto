<?php 
    require "../../conexion/conexion.php";
    $especialidad = $_POST['especialidad'];
    try {
        $mysqli->query("insert into especialidades (especialidad )values('$especialidad')");
            header("location:../../vista/especialidades/v_especialidad.php?registrado=Se ha registrado la especialidad");    
    } catch (Throwable $th) {
        echo "error" . $th->getMessage();
    }