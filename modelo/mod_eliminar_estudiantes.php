<?php

    include "../conexion/conexion.php";
    $id = $_GET['IdEsudiante'];
    try {
    $query = "DELETE FROM estudiante 
        WHERE 
				IdEsudiante=".$_REQUEST["IdEsudiante"]."
			";
    $consult = mysqli_query($mysqli, $query);
        header("Location:../vista/estudiante/lista_estudiante.php?eliminado=datos eliminados");
        } catch (MySQLException $e) {
        echo "Error: " . $e->getMessage();
    }
?>