<?php
	include "../conexion/conexion.php";
    //**datos del representante */
    $tipodoc= $_POST["sl_tipodoc"];
    $identificacion= $_POST["txtidentificacion"];
    $apellidos= $_POST["txtapellidos"];
    $nombres=$_POST["txtnombres"];
    $nacionalidad= $_POST["txtnacionalidad"];
    $email= $_POST["txtemail"];
    $instruccion= $_POST["txtinstruccion"];
    $ocupacion= $_POST["txtocupacion"];
    $sexo= $_POST["txtsexo"];
    $relacion= $_POST["txtrelacion"];
    $telefono= $_POST["txtn_telefono"];
    $calleprincipal= $_POST["txtcalleprincipal"];
    $callesecundaria= $_POST["txtcallesecundaria"];
    $n_casa= $_POST["txtn_casa"];
    $barrio= $_POST["txtbarrio"];
    $referencia= $_POST["txtreferencia"];
    $parroquia= $_POST["txtparroquia"];
    $idprovincia= $_POST["sl_provincia"];
    $idcanton= $_POST["sl_canton"];
    $idtipocontacto= $_POST["sl_tipocontacto"];
        //**datos del estudiante */
        $id_tipo_e=$_POST['documento'];
        $identificacion_e=$_POST['cedula'];
        $apellidos_e=$_POST['apellidos'];
        $nombres_e = $_POST['nombres'];
        $fecha_e=$_POST['fecha'];
        $edad_e=$_POST['edad'];
        $lugar_e=$_POST['lugar'];
        $nacionalidad_e=$_POST['nacionalidad'];
        $discapacidad_e=$_POST['discapacidad'];
        $tipodisca_e=$_POST['tipodisca'];
        $porcentaje_e=$_POST['porcentaje'];
        $email_e=$_POST['email'];
        $etnia_e=$_POST['etnia'];
        $sexo_e=$_POST['sexo'];          
        $n_telefono_e=$_POST['n_telefono'];
        $calle_principal_e=$_POST['calle_principal'];
        $calle_secundaria_e=$_POST['calle_secundaria'];
        $casa_e=$_POST['n_casa'];
        $barrio_e=$_POST['barrio'];
        $referencia_e=$_POST['referencia'];
        $id_provincia_e=$_POST['provincia'];
        $id_canton_e=$_POST['canton'];
        $id_telefono_e=$_POST['telefono'];
        $transporte_e=$_POST['transporte'];
        $tipo_sangre_e=$_POST['sangre'];
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
        $callesecundaria_p= $_POST["secundaria_p"];
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

            
try{         
    $mysqli->query("INSERT INTO representante (id_tipo, identificacion, apellidos, nombres, nacionalidad,
            email, instruccion, ocupacion, sexo, parentezco, n_telefono, calle_principal,
            calle_secundaria, n_casa, parroquia, barrio, referencia, id_provincia, id_canton, id_telefono)
                VALUES('$tipodoc', '$identificacion', '$apellidos', '$nombres', '$nacionalidad',
                    '$email', '$instruccion', '$ocupacion', '$sexo', '$relacion', '$telefono',
                    '$calleprincipal', '$callesecundaria', '$n_casa', '$parroquia','$barrio', '$referencia',
                    '$idprovincia', '$idcanton', '$idtipocontacto'
                    )");          
    $sql=("INSERT INTO estudiante(id_tipo,identificacion_e,apellido,nombre,fech_naci,edad,lugar_naci,
                    nacionalidad_e,discapacidad,tipo_discap,porcentaje,email_e,etnia,sexo_e,
                    n_telefono_e,calle_principal_e,calle_secundaria_e,n_casa_e,barrio_e,referencia_e,
                    id_provincia,id_canton,id_telefono,id_representante,transporte,tipo_sangre)
            VALUES('$id_tipo_e','$identificacion_e','$apellidos_e','$nombres_e','$fecha_e','$edad_e','$lugar_e','$nacionalidad_e',
                '$discapacidad_e','$tipodisca_e','$porcentaje_e','$email_e','$etnia_e','$sexo_e','$n_telefono_e',
                '$calle_principal_e','$calle_secundaria_e','$casa_e','$barrio_e','$referencia_e','$id_provincia_e',
                '$id_canton_e','$id_telefono_e','$mysqli->insert_id','$transporte_e','$tipo_sangre_e')");
        if(mysqli_query($mysqli,$sql)){
            $id_estudiante = mysqli_insert_id($mysqli);
            $mysqli->query("INSERT INTO padres (identificacion_p, apellidos_p, nombres_p, nacionalidad_p,
            email_p, instruccion_p, ocupacion_p, n_telefono_p, calle_principal_p,
            calle_secundaria_p, n_casa_p, barrio_p, referencia_p,provincia_p,canton_p,convencional_p,
            parroquia_p,id_estudiante)
            VALUES('$identificacion_p', '$apellidos_p', '$nombres_p', '$nacionalidad_p', '$email_p',
                '$instruccion_p','$ocupacion_p', '$telefono_p','$convencional_p',
                '$calleprincipal_p', '$callesecundaria_p', '$n_casa_p', '$barrio_p', '$referencia_p','$parroquia_p',
                '$idprovincia_p', '$idcanton_p','$id_estudiante')");
            $mysqli->query("INSERT INTO madres (identificacion_m, apellidos_m, nombres_m, nacionalidad_m,
                    email_m, instruccion_m, ocupacion_m, n_telefono_m, calle_principal_m,
                    calle_secundaria_m, n_casa_m, barrio_m, referencia_m,provincia_m,canton_m,convencional_m,
                    parroquia_m,id_estudiante)
                    VALUES('$identificacion_m', '$apellidos_m', '$nombres_m', '$nacionalidad_m', '$email_m',
                            '$instruccion_m', '$ocupacion_m', '$telefono_m','$convencional_m',
                            '$calleprincipal_m', '$callesecundaria_m', '$n_casa_m', '$barrio_m', '$referencia_m','$parroquia_m',
                            '$idprovincia_m', '$idcanton_m','$id_estudiante')");
        }

        header("Location:../vista/estudiante/vt_ingresar_est.php?registrado=Se han guardado los datos de manera correcta");

    }catch(MySQLException $e){
    echo "Error: " . $e->getMessage();      
            
}