<?php
require_once "../conexion/conexion.php";

$id= $_POST["IdRepresentante"];
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

try {
    $mysqli->query(" UPDATE representante SET
                                                id_tipo= '".$tipodoc."',
                                                identificacion= '".$identificacion."',
                                                apellidos= '".$apellidos."',
                                                nombres= '".$nombres."',
                                                nacionalidad= '".$nacionalidad."',
                                                email= '".$email."',
                                                instruccion= '".$instruccion."',
                                                ocupacion= '".$ocupacion."',
                                                sexo= '".$sexo."',
                                                parentezco= '".$relacion."',
                                                n_telefono= '".$telefono."',
                                                calle_principal= '".$calleprincipal."',
                                                calle_secundaria= '".$callesecundaria."',
                                                n_casa= '".$n_casa."',
                                                parroquia= '".$parroquia."',
                                                barrio= '".$barrio."',
                                                referencia= '".$referencia."',
                                                id_provincia= '".$idprovincia."',
                                                id_canton= '".$idcanton."',
                                                id_telefono= '".$idtipocontacto."'
                                            WHERE  IdRepresentante= '".$id."'

                                                ");
        header("location:../vista/representante/vt_lista_rep.php?registrado=exito");
} catch (MySQLException $th) {
    echo "error" . $th->getMessage();
}
?>