<?php 
    include '../conexion/conexion.php';
    $requisitos = $_POST['requisitos'];
    $documento = $_POST['documento'];
    $cedula = $_POST['cedula'];
    $nombres = $_POST['nombres'];
    $fecha = $_POST['fecha'];
    $edad = $_POST['edad'];
    $lugar = $_POST['lugar'];
    $genero = $_POST['genero'];
    $estado = $_POST['estado'];
    $actividad = $_POST['actividad'];
    $laboral = $_POST['laboral'];
    $nacionalidad = $_POST['nacionalidad'];
    $definicion = $_POST['denificion'];
    $familia = $_POST['familia'];
    $hijos = $_POST['hijos'];
    $discapacidad = $_POST['discapacidad'];
    $tipodisca = $_POST['tipodisca'];
    $porcentaje = $_POST['porcentaje'];
    $bono = $_POST['bono'];
    $celular = $_POST['celular'];
    $convencional = $_POST['convencional'];
    $correo = $_POST['correo'];
    $codigo = $_POST['codigo'];
    $rezago = $_POST['rezago'];
    $zona = $_POST['zona'];
    $provincia = $_POST['provincia'];
    $canton = $_POST['canton'];
    $parroquia = $_POST['parroquia'];
    $sector = $_POST['sector'];
    $direccion = $_POST['direccion'];
    $aprobado = $_POST['aprobado'];
    $oferta = $_POST['oferta'];

    try{
        $mysqli->query("INSERT INTO nocturna (requisitos,documento,cedula,nombres_noc,fecha,edad,lugar,genero,estado,actividad,laboral,
                            nacionalidad,definicion,familia,hijos,discapacidad,tipodisca,porcentaje,bono,celular,convencional,
                            correo,codigo,rezago,zona,provincia,canton,parroquia,sector,direccion,aprobado,oferta)
                        VALUES ('$requisitos','$documento','$cedula','$nombres','$fecha','$edad','$lugar','$genero','$estado','$actividad','$laboral',
                            '$nacionalidad','$definicion','$familia','$hijos','$discapacidad','$tipodisca','$porcentaje','$bono','$celular','$convencional',
                            '$correo','$codigo','$rezago','$zona','$provincia','$canton','$parroquia','$sector','$direccion','$aprobado','$oferta') ");
                            header("Location:../vista/estudiante/vt_ingresar_nocturna.php?registrado=Se han guardado los datos de manera correcta");
    }catch(MySQLException $e){
        echo "Error: " . $e->getMessage();      
    }

    