<?php
require_once "../../conexion/conexion.php";

$id= $_GET["IdTutor"];

try {
    $mysqli->query(" DELETE FROM tutor
                            WHERE  IdTutor= '".$id."'
                    ");
        header("location:../../vista/tutor/v_tutor.php");
} catch (MySQLException $th) {
    echo "error" . $th->getMessage();
}
?>