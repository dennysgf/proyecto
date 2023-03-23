<?php
require_once "../../conexion/conexion.php";

$id= $_GET["IdMatricula"];

try {
    $mysqli->query(" DELETE FROM matricula
                            WHERE  IdMatricula= '".$id."'
                    ");
        header("location:../../vista/matricula/v_litabaja.php");
} catch (MySQLException $th) {
    echo "error" . $th->getMessage();
}
?>