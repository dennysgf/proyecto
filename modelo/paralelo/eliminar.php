<?php
require_once "../../conexion/conexion.php";

$id= $_GET["IdParalelo"];

try {
    $mysqli->query(" DELETE FROM paralelos
                            WHERE  IdParalelo= '".$id."'
                    ");
        header("location:../../vista/paralelos/v_paralelo.php");
} catch (MySQLException $th) {
    echo "error" . $th->getMessage();
}
?>