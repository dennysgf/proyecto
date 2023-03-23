<?php
require_once "../../conexion/conexion.php";

$id= $_GET["IdEspecialidad"];

try {
    $mysqli->query(" DELETE FROM especialidades
                            WHERE  IdEspecialidad= '".$id."'
                    ");
        header("location:../../vista/especialidades/v_especialidad.php");
} catch (MySQLException $th) {
    echo "error" . $th->getMessage();
}
?>