<?php
    session_start();
    if(isset($_SESSION['nombre_usuario'])) {
    $nombre_usuario = $_SESSION['nombre_usuario'];
} else {
    header('Location:../../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>nocturna | KFC</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Right navbar links -->
      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index2.php" class="nav-link">Inicio</a>
      </li>
    </ul>
      <ul class="navbar-nav ml-auto " >
        <li class="nav-item dropdown "style="padding-left:75px;">
        
          <a class="nav-link dropdown-toggle text-sm" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user-tie"></i> <?php echo $nombre_usuario; ?>
          </a>
          <ul class="dropdown-menu"style="width:20px;">
            <li >
              <a class="dropdown-item text-sm" href="../../modelo/logout.php">
              <i class="fa-solid fa-right-from-bracket"></i> salir</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="../dist/img/descarga.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light" style="font-size:16px;">
          KLEBER FRANCO CRUZ
        </span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block"><i class="fa-solid fa-user"></i> 
            <?php echo $nombre_usuario; ?>
            </a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-restroom"></i>
               <p>
                 Pariente
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../representante/vt_lista_rep.php"class="nav-link">
                  <i class="fa-solid fa-address-book"></i> Listado representantes
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-users"></i>
               <p>
                 Estudiantes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../estudiante/lista_estudiante.php"class="nav-link">
                  <i class="fa-solid fa-address-book"></i> Listado general
                </a>
              </li>
              <li class="nav-item">
                <a href="../estudiante/vt_ingresar_est.php" class="nav-link">
                  <i class="fa-solid fa-plus"></i> Agregar matutina
                </a>
              </li>
              <li class="nav-item">
                <a href="../estudiante/vt_ingresar_nocturna.php" class="nav-link">
                  <i class="fa-solid fa-plus"></i> Agregar nocturna
                </a>
              </li>
            </ul> 
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-sharp fa-solid fa-file-invoice"></i>
                <p>
                 Matricula
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../matricula/v_lista.php"class="nav-link">
                <i class="fa-solid fa-clipboard-list"></i> Listado matriculados
                </a>
              </li>
              <li class="nav-item">
                <a href="../matricula/v_litabaja.php"class="nav-link">
                <i class="fa-solid fa-clipboard-list"></i> Listado dados de baja
                </a>
              </li>
              <li class="nav-item">
                <a href="../matricula/v_vespertina.php"class="nav-link">
                    <i class="fa-solid fa-sun"></i> Listado matutina
                </a>
              </li>
              <li class="nav-item">
                <a href="../matricula/v_nocturna.php"class="nav-link">
                    <i class="fa-solid fa-moon"></i> Listado nocturna
                </a>
              </li>
              <li class="nav-item">
                <a href="../matricula/v_matricula.php" class="nav-link">
                <i class="fa-solid fa-file-circle-plus"></i> Agregar
                </a>
              </li>
              <li class="nav-item">
                <a href="../matricula/v_reporte.php" class="nav-link">
                  <i class="fa-solid fa-file-csv"></i> reportes
                </a>
              </li>
            </ul> 
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-chalkboard-user"></i>
                <p>
                 Cursos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../periodo/v_periodo.php"class="nav-link">
                <i class="fa-solid fa-clipboard-list"></i> periodo
                </a>
              </li>
              <li class="nav-item">
                <a href="../especialidades/v_especialidad.php" class="nav-link">
                <i class="fa-solid fa-people-group"></i> especialidades
                </a>
              </li>
              <li class="nav-item">
                <a href="../nivel/v_nivel.php" class="nav-link">
                <i class="fa-solid fa-layer-group"></i> nivel
                </a>
              </li>
              <li class="nav-item">
                <a href="../secciones/v_seccion.php" class="nav-link">
                <i class="fa-solid fa-users-between-lines"></i> secciones
                </a>
              </li>
              <li class="nav-item">
                <a href="../paralelos/v_paralelo.php" class="nav-link">
                  <i class="fa-regular fa-object-group"></i> paralelos
                </a>
              </li>
              <li class="nav-item">
                  <a href="../tutor/v_tutor.php" class="nav-link">
                    <i class="fa-solid fa-chalkboard-user"></i> tutor
                  </a>
              </li>
            </ul> 
          </li>
        </ul>
      </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
    <section class="content-header">
        <form  method="post" action="../../modelo/mod_ingresar_noct.php">
        <div class="container-fluid">
            <div class="card card-default">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title">Requisitos previos del aspirante</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <div class="row">
                 <div class="col-md-9">
                    <div class="form-group">
                      <label for="">Opciones:</label><br>
                      <label style="text">1.- ¿Aspirante tiene 15 años o más para Educación Básica Superior Intensiva o 18
                    años o más para Bachillerato Intensivo?</label>
                    <label style="text">2.- ¿Aspirante tiene 3 años o más de rezago educativo?</label><br>
                    <label style="text">3.- ¿Aspirante cumple la documentación?</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                    <select required class="form-control select2" style="width: 100%;" name="requisitos">
                        <option style="justify-content: center;" selected disabled>--SELECCIONE UNA OPCIÓN--</option>
                        <option value="opcion 1" style="justify-content: center;">Opción 1</option>
                        <option value="opcion 2" style="justify-content: center;">Opción 2</option> 
                        <option value="opcion 3" style="justify-content: center;">Opción 3</option>                  
                    </select>
                    </div>
                </div>                  
                
              </div>
              <!-- /.card-body -->
              
            </div>
            </div>

            <!-- /.card -->
            <div class="card card-default">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title">Información personal del aspirante</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label style="text">Tipo de documento de identificación</label>
                      <select class="form-control select2" style="width: 100%;" name="documento">
                        <option style="justify-content: center;" selected disabled>--SELECCIONE EL TIPO DE DOCUMENTO--</option>
                        <option value="cedula" style="justify-content: center;">Cédula</option>
                        <option value="pasaporte" style="justify-content: center;">Pasaporte</option> 
                        <option value="carnet de refugiado" style="justify-content: center;">Carnet de refugiado</option>   
                      </select>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Número identificación (CI. - DNI.)</label>
                      <input required maxlength="13"name="cedula" type="text" class="form-control form-control-border"
                        placeholder="">
                    </div>
                  </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Apellidos y nombres</label>
                      <input required name="nombres" type="text" class="form-control form-control-border">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Fecha de nacimiento</label>
                      <input required name="fecha" type="date" class="form-control form-control-border">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Edad</label>
                      <input name="edad" type="text" class="form-control form-control-border">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Lugar de nacimiento</label>
                      <input type="text" class="form-control form-control-border" name="lugar">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Género</label>
                      <select class="form-control select2" style="width: 100%;" name="genero">
                        <option style="justify-content: center;" selected disabled>--SELECCIONE EL GÉNERO--</option>
                        <option value="Masculino" style="justify-content: center;">Masculino</option>
                        <option value="Femenino" style="justify-content: center;">Femenino</option> 
                        <option value="Cisgénero" style="justify-content: center;">Cisgénero</option>
                        <option value="Transgenero" style="justify-content: center;">Transgénero</option>
                        <option value="no-binarios" style="justify-content: center;">no-binarios</option>      
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Estado civil</label>
                      <select class="form-control select2" style="width: 100%;" name="estado">
                        <option style="justify-content: center;" selected disabled>--SELECCIONE UNA OPCIÓN--</option>
                        <option value="Casado" style="justify-content: center;">Casado</option>
                        <option value="Soltero" style="justify-content: center;">Soltero</option> 
                        <option value="Divorciado" style="justify-content: center;">Divorciado</option>
                        <option value="Union libre" style="justify-content: center;">Union libre</option>
                        <option value="Viudo" style="justify-content: center;">Viudo</option>
                        <option value="Union de hecho" style="justify-content: center;">Union de hecho</option>     
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Actividad económica</label>
                      <select class="form-control select2" style="width: 100%;" name="actividad">
                        <option style="justify-content: center;" selected disabled>--SELECCIONE UNA OPCIÓN--</option>
                        <option value="Agropecuaria" style="justify-content: center;">Agropecuaria</option>
                        <option value="Artesanal" style="justify-content: center;">Artesanal</option> 
                        <option value="Comercial" style="justify-content: center;">Comercial</option>
                        <option value="Servicio" style="justify-content: center;">Servicio</option>
                        <option value="Domestica" style="justify-content: center;">Domestica</option>
                        <option value="Agricultura" style="justify-content: center;">Agricultura</option>
                        <option value="Minas y cantera" style="justify-content: center;">Minas y cantera</option>
                        <option value="Salud" style="justify-content: center;">Salud</option>
                        <option value="Mensajeria y correos" style="justify-content: center;">Mensajeria y correos</option>
                        <option value="Seguridad" style="justify-content: center;">Seguridad</option>
                        <option value="Construccion" style="justify-content: center;">Construcción</option>
                        <option value="Servidor publico" style="justify-content: center;">Servidor público</option>
                        <option value="Otra" style="justify-content: center;">Otra</option>
                        <option value="Ninguna" style="justify-content: center;">Ninguna</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Situación laboral</label>
                      <select class="form-control select2" style="width: 100%;" name="laboral">
                        <option style="justify-content: center;" selected disabled>--SELECCIONE UNA OPCIÓN--</option>
                        <option value="Con empleo" style="justify-content: center;">Con empleo</option>
                        <option value="Sin empleo" style="justify-content: center;">Sin empleo</option> 
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Nacionalidad</label>
                      <select class="form-control select2" style="width: 100%;" name="nacionalidad">
                                  <option disabled selected>--SELECCIONE NACIONALIDAD--</option>                         
                                  <option value="Argentina">Argentina</option>
                                  <option value="Boliviana">Boliviana</option>
                                  <option value="Brasileña">Brasileña</option>
                                  <option value="Chilena">Chilena</option>
                                  <option value="Colombiana">Colombiana</option>
                                  <option value="Cubana">Cubana</option>
                                  <option value="Ecuatoriana">Ecuatoriana</option>
                                  <option value="Salvadoreña">Salvadoreña</option>
                                  <option value="Guatemalteca">Guatemalteca</option>
                                  <option value="Haitíense">Haitíense</option>
                                  <option value="Hondureña">Hondureña</option>
                                  <option value="Mexicana">LoMexicanaja</option>
                                  <option value="Nicaraguense">Nicaraguense</option>
                                  <option value="Panameña">Panameña</option>
                                  <option value="Paraguayo">Paraguayo</option>
                                  <option value="Peruana">Peruana</option>
                                  <option value="Puertorriqueño">Puertorriqueño</option>
                                  <option value="Dominicana">Dominicana</option>
                                  <option value="Uruguaya">Uruguaya</option>
                                  <option value="Venezolana">Venezolana</option>
                                  <option value="Canadiense">Canadiense</option>
                                  <option value="Estadounidense">Estadounidense</option>
                                  <option value="otra">otra</option>
                            </select>
                    </div>
                  </div>
                  
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Autodefinición étnica</label>
                      <select class="form-control select2" style="width: 100%;" name="denificion">
                        <option style="justify-content: center;" selected disabled>--SELECCIONE UNA OPCIÓN--</option>
                        <option value="Afrodescendiente" style="justify-content: center;">Afrodescendiente</option>
                        <option value="Montubio" style="justify-content: center;">Montubio</option> 
                        <option value="Afroecuatoriano" style="justify-content: center;">Afroecuatoriano</option>
                        <option value="Mestizo" style="justify-content: center;">Mestizo</option>
                        <option value="Mulato" style="justify-content: center;">Mulato</option>
                        <option value="Blanca" style="justify-content: center;">Blanca</option>
                        <option value="Negro" style="justify-content: center;">Negro</option>
                        <option value="Indigena" style="justify-content: center;">Indigena</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">¿Tiene hijos?</label>
                      <input type="text" maxlength="2" class="form-control" name="familia" placeholder="escriba no o sí">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">En caso de ser "SI" tener hijos seleccione</label>
                      <select class="form-control select2" style="width: 100%;" name="hijos">
                        <option style="justify-content: center;" selected value ="0">--SELECCIONE UNA OPCIÓN--</option>
                        <option value="Tiene hijos de 0-5 años" style="justify-content: center;">Tiene hijos de 0-5 años</option>
                        <option value="Tiene hijos de 6-17 años" style="justify-content: center;">Tiene hijos de 6-17 años</option> 
                        <option value="Tiene 18 años en adelante" style="justify-content: center;">Tiene 18 años en adelante</option>
                        <option value="Está en estado gestación" style="justify-content: center;">Está en estado gestación</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">¿Tiene discapacidad?</label>
                      <input type="text" maxlength="2" class="form-control form-control-border" name="discapacidad" placeholder="escriba si o no">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Tipo de discapacidad</label>
                      <input type="text" class="form-control form-control-border" name="tipodisca">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Porcentaje de discapacidad</label>
                      <input type="text" class="form-control form-control-border" name="porcentaje">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">¿Recibe bono de desarrollo humano?</label>
                      <input type="text"maxlength="2" class="form-control form-control-border" name="bono"  placeholder="escriba no o si ">
                    </div>
                  </div>    
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Teléfono celular</label>
                      <input maxlength="10" type="text" class="form-control form-control-border" name="celular">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Teléfono convencional</label>
                      <input type="text" class="form-control form-control-border" name="convencional">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Correo electrónico</label>
                      <input type="email" class="form-control form-control-border" name="correo">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Código único electrico</label>
                      <input type="text" class="form-control form-control-border" name="codigo">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Años de rezago educativo del aspirante</label>
                      <select class="form-control select2" style="width: 100%;" name="rezago">
                        <option style="justify-content: center;" selected disabled >--SELECCIONE UNA OPCIÓN--</option>
                        <option value="1" style="justify-content: center;">3 - 5 años dentro del sistema educativo</option>
                        <option value="2" style="justify-content: center;">3 - 5 años fuera del sistema educativo</option> 
                        <option value="3" style="justify-content: center;">Menos de 3 años de rezago,14 años, 16 años y 17</option>
                        <option value="4" style="justify-content: center;">Más de 10 años fuera del sistema</option>
                        <option value="5" style="justify-content: center;">6 - 10 años fuera del sistema educativo</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Zona</label>
                      <input type="text" class="form-control form-control-border" name="zona">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Provincia</label>
                              <select class="form-control select2" style="width: 100%;" name="provincia">
                                  <option selected disabled>--SELECCIONE PROVINCIA--</option>
                                  <option value="Azuay">Azuay</option>
                                  <option value="Bolívar">Bolívar</option>
                                  <option value="Cañar">Cañar</option>
                                  <option value="Carchi">Carchi</option>
                                  <option value="Chimborazo">Chimborazo</option>
                                  <option value="Cotopaxi">Cotopaxi</option>
                                  <option value="El Oro">El Oro</option>
                                  <option value="Esmeraldas">Esmeraldas</option>
                                  <option value="Galápagos">Galápagos</option>
                                  <option value="Guayas">Guayas</option>
                                  <option value="Imbabura">Imbabura</option>
                                  <option value="Loja">Loja</option>
                                  <option value="Los Ríos">Los Ríos</option>
                                  <option value="Manabí">Manabí</option>
                                  <option value="Morona Santiago">Morona Santiago</option>
                                  <option value="Napo">Napo</option>
                                  <option value="Sucumbíos">Sucumbíos</option>
                                  <option value="Pastaza">Pastaza</option>
                                  <option value="Pichincha">Pichincha</option>
                                  <option value="Santa Elena">Santa Elena</option>
                                  <option value="Santo Domingo">Santo Domingo</option>
                                  <option value="Orellana">Orellana</option>
                                  <option value="Tungurahua">Tungurahua</option>
                                  <option value="Zamora Chinchipe">Zamora Chinchipe</option>
                            </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                          <div class="form-group">
                              <label for="">Cantón</label>
                              <input name="canton" type="text" class="form-control form-control-border">
                           </div>
                        </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Parroquia</label>
                      <input type="text" class="form-control form-control-border" name="parroquia">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Sector</label>
                      <input type="text" class="form-control form-control-border" name="sector" placeholder="Escriba: uraba o rural">
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="form-group">
                      <label for="">Dirección (barrio/comunidad/sector/calle principal/calle secundaria/referencia)</label>
                      <input type="text" class="form-control form-control-border" name="direccion" placeholder="Escriba: uraba o rural">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Último año aprobado</label>
                              <select class="form-control select2" style="width: 100%;" name="aprobado">
                                  <option selected disabled>--SELECCIONE--</option>
                                  <option value="3ro. EGB">3ro. EGB</option>
                                  <option value="5to. EGB">5to. EGB</option>
                                  <option value="7mo. EGB">7mo. EGB</option>
                                  <option value="8vo. EGB">8vo. EGB</option>
                                  <option value="9no. EGB">9no. EGB</option>
                                  <option value="10mo. EGB">10mo. EGB</option>
                                  <option value="1ro. BGU">1ro. BGU</option>
                                  <option value="2do. BGU">2do. BGU</option>
                            </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Oferta educativa en la que desea inscribirse</label>
                              <select class="form-control select2" style="width: 100%;" name="oferta">
                                  <option selected disabled>--SELECCIONE--</option>
                                  <option value="semipresencial intensiva PCEI">semipresencial intensiva PCEI</option>
                                  <option value="Post alfbetización - 10 meses (4to - 5to E.G.B)">Post alfbetización - 10 meses (4to - 5to E.G.B)</option>
                                  <option value="Post alfbetización - 10 meses (6to - 7mo E.G.B)">Post alfbetización - 10 meses (6to - 7mo E.G.B)</option>
                                  <option value="Educación básica superior intensiva - 11 meses (8bo - 9no - 10mo EGB)">Educación básica superior intensiva - 11 meses (8bo - 9no - 10mo EGB)</option>
                                  <option value="Bachillerato Intensivo - 10 meses (1ro - 2do BGU)">Bachillerato Intensivo - 10 meses (1ro - 2do BGU)</option>
                                  <option value="Bachillerato Intensivo - 10 meses (2do - 3ro BGU)">Bachillerato Intensivo - 10 meses (2do - 3ro BGU)</option>
                                  <option value="Bachillerato Intensivo - 5 meses (3ro BGU)">Bachillerato Intensivo - 5 meses (3ro BGU)</option>
                            </select>
                    </div>
                  </div>

                  </div>
                  </div>
                </div>
                <div class="text-center">
            <button type="submit" class="btn btn-success toastrDefaultSuccess" name="btnguardar">
            <i class="fa-solid fa-floppy-disk"></i> Guardar
            </button>
            <!-- /.card-body -->
          </div><br>
          
              </div>
              
                      
          
    </form>

        </section>  
    </div>
    <script src="sweetalert2.all.min.js"></script>     
    <footer class="main-footer">
      <strong>Copyright &copy; 2023-2030 <a href="#">INSTPP</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer> 
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="../plugins/select2/js/select2.full.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="../plugins/moment/moment.min.js"></script>
  <script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- date-range-picker -->
  <script src="../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="./.plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- BS-Stepper -->
  <script src="../plugins/bs-stepper/js/bs-stepper.min.js"></script>
  <!-- dropzonejs -->
  <script src="../plugins/dropzone/min/dropzone.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>

  <!-- Page specific script -->
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date picker
      $('#reservationdate').datetimepicker({
        format: 'L'
      });

      //Date and time picker
      $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function (event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      })

      $("input[data-bootstrap-switch]").each(function () {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
      url: "/target-url", // Set the url
      thumbnailWidth: 80,
      thumbnailHeight: 80,
      parallelUploads: 20,
      previewTemplate: previewTemplate,
      autoQueue: false, // Make sure the files aren't queued until manually added
      previewsContainer: "#previews", // Define the container to display the previews
      clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function (file) {
      // Hookup the start button
      file.previewElement.querySelector(".start").onclick = function () { myDropzone.enqueueFile(file) }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function (progress) {
      document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function (file) {
      // Show the total progress bar when upload starts
      document.querySelector("#total-progress").style.opacity = "1"
      // And disable the start button
      file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function (progress) {
      document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function () {
      myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function () {
      myDropzone.removeAllFiles(true)
    }
  // DropzoneJS Demo Code End
  </script>
</body>

</html>