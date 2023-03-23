<?php
include('../../conexion/conexion.php');
$fecha1 = $_POST['fecha1'];
$fecha2 = $_POST['fecha2'];

    //nombre del archivo y charset
    header('Content-type:text/csv; charset=latin1');
    header('Content-Disposition: attachment; filename="reporte_estudiantes_nocturna.csv"');

    //salida del archivo
    $salida = fopen('php://output', 'w');
    //encabezado
    fputcsv($salida, array('Estudiante','Tipo de matricula', 'Tipo de asignación', 'Fecha de inscripción',
                            'Curso','Sección','Paralelo','Especialidad','Tutor asignado','Periodo lectivo'));
    //query para crear reporte
    $reporteCsv = $mysqli->query("SELECT * FROM matriculanoc 
                    INNER JOIN nocturna on matriculanoc.id_nocturna= nocturna.IdNocturna
                    INNER JOIN especialidades on matriculanoc.especialidad_id = especialidades.IdEspecialidad 
                    INNER JOIN niveles on matriculanoc.nivel_id = niveles.Idnivel  
                    INNER JOIN paralelos on matriculanoc.paralelo_id= paralelos.IdParalelo
                    INNER JOIN periodos on matriculanoc.periodo_id= periodos.IdPeriodo
                    INNER JOIN secciones on matriculanoc.seccion_id= secciones.IdSeccion 
                    INNER JOIN  tutor on matriculanoc.tutor_id=tutor.IdTutor
                    WHERE fecha_inscrip BETWEEN'$fecha1'and '$fecha2' ORDER BY fecha_inscrip asc");
    while($filaR= $reporteCsv->fetch_assoc())
		fputcsv($salida, array($filaR['nombres_noc'],
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




