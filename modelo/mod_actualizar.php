<?php
    include "../conexion/conexion.php";
            $id=$_POST['IdEsudiante'];
            $id_tipo=$_POST['documento'];
            $identificacion=$_POST['cedula'];
            $apellidos=$_POST['apellidos'];
            $nombres = $_POST['nombres'];
            $fecha=$_POST['fecha'];
            $edad=$_POST['edad'];
            $lugar=$_POST['lugar'];
            $nacionalidad=$_POST['nacionalidad'];
            $discapacidad=$_POST['discapacidad'];
            $tipodisca=$_POST['tipodisca'];
            $porcentaje=$_POST['porcentaje'];
            $email=$_POST['email'];
            $etnia=$_POST['etnia'];
            $sexo=$_POST['sexo'];          
            
            $n_telefono=$_POST['n_telefono'];
            $calle_principal=$_POST['calle_principal'];
            $calle_secundaria=$_POST['calle_secundaria'];
            $casa=$_POST['n_casa'];
            $barrio=$_POST['barrio'];
            $referencia=$_POST['referencia'];
            $id_provincia=$_POST['provincia'];
            $id_canton=$_POST['canton'];
            $id_telefono=$_POST['telefono'];
            $id_representante=$_POST['representante'];
       
            $transporte=$_POST['transporte'];
            $tipo_sangre=$_POST['sangre'];
                    //**DATOS DEL PADRE */
        $identificacion_p= $_POST["cedula_p"];
        $apellidos_p= $_POST["apellido_p"];
        $nombres_p=$_POST["nombre_p"];
        $nacionalidad_p= $_POST["nacionalidad_p"];
        $email_p= $_POST["email_p"];
        $instruccion_p= $_POST["instruccion_p"];
        $ocupacion_p= $_POST["ocupacion_p"];
        $telefono_p= $_POST["telefono_p"];
        $convencional_p=$_POST["convencional_p"];
        $calleprincipal_p= $_POST["principal_p"];
        $calle_secundaria_p= $_POST["secundaria_p"];
        $n_casa_p= $_POST["n_casa_p"];
        $barrio_p= $_POST["barrio_p"];
        $referencia_p= $_POST["referencia_p"];
        $parroquia_p= $_POST["parroquia_p"];
        $idprovincia_p= $_POST["provincia_p"];
        $idcanton_p= $_POST["canton_p"];
        //**DATOS DE LA MADRE */
        $identificacion_m= $_POST["cedula_m"];
        $apellidos_m= $_POST["apellido_m"];
        $nombres_m=$_POST["nombre_m"];
        $nacionalidad_m= $_POST["nacionalidad_m"];
        $email_m= $_POST["email_m"];
        $instruccion_m= $_POST["instruccion_m"];
        $ocupacion_m= $_POST["ocupacion_m"];
        $telefono_m= $_POST["telefono_m"];
        $convencional_m=$_POST["convencional_m"];
        $calleprincipal_m= $_POST["principal_m"];
        $callesecundaria_m= $_POST["secundaria_m"];
        $n_casa_m= $_POST["n_casa_m"];
        $barrio_m= $_POST["barrio_m"];
        $referencia_m= $_POST["referencia_m"];
        $parroquia_m= $_POST["parroquia_m"];
        $idprovincia_m= $_POST["provincia_m"];
        $idcanton_m= $_POST["canton_m"];           

    try {
        $sql = "UPDATE estudiante SET 
        id_tipo='" . $id_tipo . "',identificacion_e='".$identificacion."',
        apellido='" . $apellidos . "', nombre='" . $nombres ."',
        fech_naci='" . $fecha . "', edad='" . $edad . "',lugar_naci='" . $lugar . "',
        nacionalidad_e='" . $nacionalidad . "', discapacidad='" . $discapacidad . "',
        porcentaje='" . $porcentaje . "',tipo_discap='" . $tipodisca . "',email_e='" . $email . "',
        etnia='" . $etnia . "',sexo_e='" . $sexo . "',n_telefono_e='" . $n_telefono . "',
        calle_principal_e='" . $calle_principal . "',calle_secundaria_e='" . $calle_secundaria . "',
        n_casa_e='" . $casa . "',barrio_e='" . $barrio . "', referencia_e='" . $referencia . "',
        id_provincia='" . $id_provincia . "',id_canton='" . $id_canton . "', id_telefono='" . $id_telefono . "',
        id_representante='" . $id_representante . "',transporte='" . $transporte . "', tipo_sangre='" . $tipo_sangre ."'
        WHERE IdEsudiante =" . $id . "";
        if(mysqli_query($mysqli,$sql)){
            $mysqli->query("UPDATE padres SET  identificacion_p='".$identificacion_p."', apellidos_p='".$apellidos_p."', 
                            nombres_p='".$nombres_p."', nacionalidad_p='".$nacionalidad_p."',
                            email_p='".$email_p."', instruccion_p='".$instruccion_p."', ocupacion_p='".$ocupacion_p."', 
                            n_telefono_p='".$telefono_p."', calle_principal_p='".$calleprincipal_p."',
                            calle_secundaria_p='".$calle_secundaria_p."', n_casa_p='".$n_casa_p."', 
                            barrio_p='".$barrio_p."', referencia_p='".$referencia_p."',convencional_p='".$convencional_p."',
                            parroquia_p='".$parroquia_p."',id_estudiante='".$id."',provincia_p='".$idprovincia_p."',
                            canton_p='".$idcanton_p."'WHERE id_estudiante=".$id."");

            $mysqli->query("UPDATE madres SET 
                            identificacion_m='".$identificacion_m."', apellidos_m='".$apellidos_m."', nombres_m='".$nombres_m."', 
                            nacionalidad_m='".$nacionalidad_m."', email_m='".$email_m."', instruccion_m='".$instruccion_m."', 
                            ocupacion_m='".$ocupacion_m."', n_telefono_m='".$telefono_m."', calle_principal_m='".$calleprincipal_m."',
                            calle_secundaria_m='".$callesecundaria_m."', n_casa_m='".$n_casa_m."', barrio_m='".$barrio_m."', referencia_m='".$referencia_m."',
                            provincia_m='".$idprovincia_m."',canton_m='".$idcanton_m."',convencional_m='".$convencional_m."',
                            parroquia_m='".$parroquia_m."', id_estudiante='".$id."' WHERE id_estudiante=".$id."");
        }
        header("Location:../vista/estudiante/lista_estudiante.php?actualizado=datos actualizados");
    } catch (MySQLException $e) {
        echo "Error: " . $e->getMessage();
    }



