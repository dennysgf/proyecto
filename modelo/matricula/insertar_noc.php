<?php 
    include "../../conexion/conexion.php";
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

try {
    $query=("INSERT  INTO matriculanoc(id_nocturna,tipo_matricula,tipo_asig,fecha_inscrip,nivel_id,seccion_id,paralelo_id,especialidad_id,periodo_id,tutor_id)
                    values('$id_estudiante','$matricula','$asignacion','$fecha','$nivel_id',
                    '$seccion_id','$paralelo_id','$especialidad_id','$periodo_id','$tutor_id')");
    $resultado = mysqli_query($mysqli, $query);  

    if($resultado === TRUE){
        header("Location:../../vista/matricula/v_matricula_noc.php?registrado=estudiante matriculado"); 
    }else{
       
    }
    } catch (Throwable $th) {
        header("Location:../../vista/matricula/v_matricula_noc.php?error=rellene o seleccione todos los campos"); 
    }