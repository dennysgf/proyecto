<?php
include "../../conexion/conexion.php";
$id="";
$nombres="";
$apellidos="";

if(isset($_POST["busqueda"])){
    $cedula= $_POST['n_cedula_est'];
    $sql = $mysqli->query("SELECT * FROM estudiante WHERE identificacion_e=".$cedula."");
    while($resultado=$sql->fetch_assoc()){
        $id=$resultado['IdEsudiante'];
        $nombres= $resultado['nombre'];
        $apellidos=$resultado['apellido'];
    }
}