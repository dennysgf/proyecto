<?php
require_once "../../conexion/conexion.php";

$id= $_GET["IdSeccion"];

try {
    $mysqli->query(" DELETE FROM secciones
                            WHERE  IdSeccion= '".$id."'
                    ");
        header("location:../../vista/secciones/v_seccion.php");
} catch (MySQLException $th) {
    echo "error" . $th->getMessage();
}
?>