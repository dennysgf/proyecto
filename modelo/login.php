<?php
require_once('../conexion/conexion.php');
session_start();
$nombre_usuario = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$query = "SELECT * FROM usuarios WHERE usuario = '$nombre_usuario' AND contrasena = '$contrasena'";
$resultado = mysqli_query($mysqli, $query);
if(mysqli_num_rows($resultado) == 1) {
    $_SESSION['nombre_usuario'] = $nombre_usuario;
    header("location:../vista/index2.php");
} else {
    header("location:../index.php?error=El usuario o la clave son incorrectas, asegurese tambien de rellenar todos los campos");
}
