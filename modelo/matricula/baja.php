<?php 
    include "../../conexion/conexion.php";
    $id_matricula= $_POST['id_matricula'];
    $id_estudiante= $_POST['id_estudiante'];
    $asignacion=$_POST['asignacion'];
    $matricula=$_POST['matricula'];
    $fecha=$_POST['fecha'];
    $nivel_id=$_POST['nivel_m'];
    $seccion_id=$_POST['seccion'];
    $paralelo_id=$_POST['paralelo'];
    $especialidad_id=$_POST['especialidades'];
    $periodo_id=$_POST['periodo'];
    $tutor_id=$_POST['tutor'];
    $baja=$_POST['baja'];

try {
    $mysqli->query("UPDATE matricula SET 
                            id_estudiante='".$id_estudiante."',tipo_matricula='".$matricula."',
                            tipo_asig='".$asignacion."',fecha_inscrip='".$fecha."',
                            nivel_id='".$nivel_id."', seccion_id='".$seccion_id."',
                            paralelo_id='".$paralelo_id."',especialidad_id='".$especialidad_id."',
                            periodo_id='".$periodo_id."',tutor_id='".$tutor_id."',
                            registro='".$baja."' 
                            WHERE IdMatricula =" . $id_matricula . "");
        header("Location:../../vista/matricula/v_lista.php?registrado=Estudiante dado de baja"); 
        
    } catch (Throwable $th) {
            echo "error" . $th->getMessage();
    }