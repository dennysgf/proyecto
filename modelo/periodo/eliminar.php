<?php
require_once "../../conexion/conexion.php";

$id= $_GET["IdPeriodo"];

try {
    $mysqli->query(" DELETE FROM periodos
                            WHERE  IdPeriodo= '".$id."'
                    ");
        header("location:../../vista/periodo/v_periodo.php");
} catch (MySQLException $th) {
    echo "error" . $th->getMessage();
}
?>