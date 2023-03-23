<?php
include "../../conexion/conexion.php";
$id="";
$nombres="";

if(isset($_POST["busqueda"])){
    $cedula= $_POST['n_cedula_est'];
    $sql = $mysqli->query("SELECT * FROM nocturna WHERE cedula=".$cedula."");
    while($resultado=$sql->fetch_assoc()){
        $id=$resultado['IdNocturna'];
        $nombres= $resultado['nombres'];
    }
}