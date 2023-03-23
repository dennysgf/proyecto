<?php
    include "../conexion/conexion.php";
    $id = $_POST['IdNocturna'];
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

    try {
        $mysqli->query( "UPDATE nocturna SET 
            requisitos = '".$requisitos."',documento='".$documento."',cedula='".$cedula."',nombres_noc='".$nombres."',
            fecha='".$fecha."',edad='".$edad."',lugar='".$lugar."',genero='".$genero."',estado='".$estado."',actividad='".$actividad."',
            laboral='".$laboral."',nacionalidad='".$nacionalidad."',definicion='".$definicion."',familia='".$familia."',hijos='".$hijos."',
            discapacidad='".$discapacidad."',tipodisca='".$tipodisca."',porcentaje='".$porcentaje."',bono='".$bono."',celular='".$celular."',
            convencional='".$convencional."', correo='".$correo."',codigo='".$codigo."',rezago='".$rezago."',zona='".$zona."',
            provincia='".$provincia."',canton='".$canton."',parroquia='".$parroquia."',sector='".$sector."',direccion='".$direccion."',
            aprobado='".$aprobado."',oferta='".$oferta."'
            WHERE IdNocturna =" . $id . "");
                header("Location:../vista/estudiante/lista_estudiantenoc.php?actualizado=datos actualizados");
    }catch (MySQLException $e) {
        header("Location:../vista/estudiante/lista_estudiantenoc.php?error=Asegurese de que todos los campos esten llenos o seleccionados correctamente");
    }



