<?php
function Conectar()
{
    $conn = null;
    $host = "localhost";
    $db = 'basecolegio';
    $user = 'root';
    $pass = '';
    try {
        $conn = new PDO('mysql:host=' . $host . ';dbname=' . $db, $user, $pass);
    } catch (PDOException $e) {
        echo ':(Error al conectar con la base de datos' . $e;
        exit;
    }
    return $conn;
}
