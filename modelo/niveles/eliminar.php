<?php
require_once "../../conexion/conexion.php";

$id= $_GET["Idnivel"];

try {
    $mysqli->query(" DELETE FROM niveles
                            WHERE  Idnivel= '".$id."'
                    ");
        header("location:../../vista/nivel/v_nivel.php");
} catch (MySQLException $th) {
    echo "error" . $th->getMessage();
}
?>