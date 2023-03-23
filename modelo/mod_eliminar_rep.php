<?php
require_once "../conexion/conexion.php";

$id= $_POST["IdRepresentante"];

try {
    $mysqli->query(" DELETE FROM representante
                            WHERE  IdRepresentante= '".$id."'
                    ");
        header("location:../vista/representante/vt_lista_rep.php?registrado=exito");
} catch (MySQLException $th) {
    echo "error" . $th->getMessage();
}
?>