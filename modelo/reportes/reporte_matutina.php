<?php
include('../../conexion/conexion.php');
$fecha1 = $_POST['fecha1'];
$fecha2 = $_POST['fecha2'];

    //nombre del archivo y charset
    header('Content-type:text/csv; charset=latin1');
    header('Content-Disposition: attachment; filename="reporte_estudiantes_matutina.csv"');

    //salida del archivo
    $salida = fopen('php://output', 'w');
    //encabezado
    fputcsv($salida, array('Apellidos','Nombres' ,'Tipo de matricula', 'Tipo de asignación', 'Fecha de inscripción',
                            'Curso','Sección','Paralelo','Especialidad','Tutor asignado','Periodo lectivo'));
    //query para crear reporte
    $reporteCsv = $mysqli->query("SELECT * FROM matricula 
                                    INNER JOIN estudiante on matricula.id_estudiante= estudiante.IdEsudiante
                                    INNER JOIN especialidades on matricula.especialidad_id = especialidades.IdEspecialidad 
                                    INNER JOIN niveles on matricula.nivel_id = niveles.Idnivel  
                                    INNER JOIN paralelos on matricula.paralelo_id= paralelos.IdParalelo
                                    INNER JOIN periodos on matricula.periodo_id= periodos.IdPeriodo
                                    INNER JOIN secciones on matricula.seccion_id= secciones.IdSeccion 
                                    INNER JOIN  tutor on matricula.tutor_id=tutor.IdTutor
                                    WHERE fecha_inscrip BETWEEN'$fecha1'and '$fecha2' ORDER BY fecha_inscrip asc");
    if($reporteCsv){
        while($filaR= $reporteCsv->fetch_assoc())
		fputcsv($salida, array($filaR['apellido'], 
								$filaR['nombre'],
                                $filaR['tipo_matricula'],
                                $filaR['tipo_asig'],
								$filaR['fecha_inscrip'],
                                $filaR['nivel'],
								$filaR['seccion'],
								$filaR['paralelo'],
                                $filaR['especialidad'],
                                $filaR['nombres'],
                                $filaR['periodo']
        ));
    }else{
        $reporteCsv1 = $mysqli->query("SELECT * FROM matricula 
        INNER JOIN estudiante on matricula.id_estudiante= estudiante.IdEsudiante
        INNER JOIN especialidades on matricula.especialidad_id = especialidades.IdEspecialidad 
        INNER JOIN niveles on matricula.nivel_id = niveles.Idnivel  
        INNER JOIN paralelos on matricula.paralelo_id= paralelos.IdParalelo
        INNER JOIN periodos on matricula.periodo_id= periodos.IdPeriodo
        INNER JOIN secciones on matricula.seccion_id= secciones.IdSeccion 
        INNER JOIN  tutor on matricula.tutor_id=tutor.IdTutor
        WHERE fecha_inscrip ='$fecha1' ORDER BY fecha_inscrip asc");
                while($filaR= $reporteCsv1->fetch_assoc())
                fputcsv($salida, array($filaR['apellido'], 
                                        $filaR['nombre'],
                                        $filaR['tipo_matricula'],
                                        $filaR['tipo_asig'],
                                        $filaR['fecha_inscrip'],
                                        $filaR['nivel'],
                                        $filaR['seccion'],
                                        $filaR['paralelo'],
                                        $filaR['especialidad'],
                                        $filaR['nombres'],
                                        $filaR['periodo']
                ));
    }





