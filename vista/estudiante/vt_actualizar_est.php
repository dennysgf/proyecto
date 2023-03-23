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
  <title>Estudiante</title>

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
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a href="../../modelo/logout.php" style="text-decoration: none;">
            <i class="fa-solid fa-right-from-bracket"></i> cerrar sesión
          </a>
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
        <span class="brand-text font-weight-light">
          KFC
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
                  <i class="fa-solid fa-address-book"></i> Listado general matutina
                </a>
              </li>
              <li class="nav-item">
                <a href="../estudiante/lista_estudiantenoc.php"class="nav-link">
                  <i class="fa-solid fa-address-book"></i> Listado general nocturna
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
                <i class="fa-solid fa-clipboard-list"></i> matriculados matutina
                </a>
              </li>
          
              <li class="nav-item">
                <a href="../matricula/v_listanoc.php"class="nav-link">
                <i class="fa-solid fa-clipboard-list"></i> matriculados nocturna
                </a>
              </li>
              <hr>
              <li class="nav-item">
                <a href="../matricula/v_litabaja.php"class="nav-link">
                <i class="fa-solid fa-clipboard-list"></i> dados de baja matutina
                </a>
              </li>
              <li class="nav-item">
                <a href="../matricula/v_listabajanoc.php"class="nav-link">
                <i class="fa-solid fa-clipboard-list"></i> dados de baja nocturna
                </a>
              </li>
              <hr>
              <li class="nav-item">
                <a href="../matricula/v_vespertina.php"class="nav-link">
                    <i class="fa-solid fa-sun"></i> Listado matutina
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../matricula/v_nocrtuna.php"class="nav-link">
                    <i class="fa-solid fa-moon"></i> Listado nocturna
                </a>
              </li>
              <hr>
              <li class="nav-item">
                <a href="../matricula/v_matricula.php" class="nav-link">
                <i class="fa-solid fa-file-circle-plus"></i> matricula matutina
                </a>
              </li>
              <li class="nav-item">
                <a href="../matricula/v_matricula_noc.php" class="nav-link">
                <i class="fa-solid fa-file-circle-plus"></i> matricula nocturna
                </a>
              </li>
              <hr>
              <li class="nav-item">
                <a href="../reportes/reporte_matutina.php" class="nav-link">
                  <i class="fa-solid fa-file-csv"></i> reportes matutina
                </a>
              </li>
              <li class="nav-item">
                <a href="../reportes/reporte_nocturna.php" class="nav-link">
                  <i class="fa-solid fa-file-csv"></i> reportes nocturna
                </a>
              </li>
              <hr>
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
</aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Formulario</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <form  method="post" action="../../modelo/mod_actualizar.php">
        <section class="content">
          <!-- Default box -->
          <div class="card">
                 <?php 
                    require_once ("../../conexion/conexion.php");
                    $sql = "SELECT * FROM estudiante WHERE IdEsudiante =".$_GET['IdEsudiante'];
                    $resultado = $mysqli->query($sql);
                    $row = $resultado->fetch_assoc();

                    $sql2 = "SELECT * FROM padres WHERE id_estudiante =".$_GET['IdEsudiante'];
                    $resultado2 = $mysqli->query($sql2);
                    $row2 = $resultado2->fetch_assoc();

                    $sql3 = "SELECT * FROM madres WHERE id_estudiante =".$_GET['IdEsudiante'];
                    $resultado3 = $mysqli->query($sql3);
                    $row3 = $resultado3->fetch_assoc();

                  ?>
            <div class="card card-default">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title">Datos personales</h3>
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
                  <div class="col-md-6">
                    <div class="form-group">
                      <label style="text">tipo de documento</label>
                      <select class="form-control select2" style="width: 100%;" name="documento" >
                       <?php

                          $sql1 = "SELECT * FROM documento WHERE IdDocumento=".$row['id_tipo'];
                          $resultado1 = $mysqli->query($sql1);

                          $row1 = $resultado1->fetch_assoc();

                          echo "<option selected  value='".$row1['IdDocumento']."'>".$row1['tipo']."</option>";

                          $sql2 = "SELECT * FROM documento";
                          $resultado2 = $mysqli->query($sql2);

                          while ($Fila = $resultado2->fetch_array()) {
                              echo "<option value='".$Fila['IdDocumento']."'>".$Fila['tipo']."</option>";
                          }
                      ?> 
                      </select>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">núnero de cedula/identidad</label>
                      <input name="cedula" type="text" class="form-control form-control-border"
                        placeholder="" value="<?php echo $row['identificacion_e']; ?>">
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
                <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                      <input type="hidden" name="IdEsudiante" value="<?php echo $row['IdEsudiante']; ?>">
                      <label for="">nombres</label>
                      <input name="nombres" type="text" class="form-control form-control-border"value="<?php echo $row['nombre']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                    <label for="">apellidos</label>
                      <input name="apellidos" type="text" class="form-control form-control-border" value="<?php echo $row['apellido']; ?>">                   
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">fecha de nacimiento</label>
                      <input name="fecha" type="date" class="form-control form-control-border"value="<?php echo $row['fech_naci']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">edad</label>
                      <input name="edad" type="text" class="form-control form-control-border" value="<?php echo $row['edad']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">lugar de nacimiento</label>
                      <input type="text" class="form-control form-control-border" name="lugar" value="<?php echo $row['lugar_naci']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">nacionalidad</label>
                      <select class="form-control select2" style="width: 100%;" name="nacionalidad">
                                  <option selected value="<?php echo $row['nacionalidad_e']; ?>"><?php echo $row['nacionalidad_e']; ?></option>
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
                      <label for="">¿tiene discapacidad?</label>
                      <input type="text" class="form-control form-control-border" name="discapacidad" value="<?php echo $row['discapacidad']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">tipo de discapacidad</label>
                      <input type="text" class="form-control form-control-border" name="tipodisca" value="<?php echo $row['tipo_discap']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">porcentaje de discapacidad</label>
                      <input type="text" class="form-control form-control-border" name="porcentaje" value="<?php echo $row['porcentaje']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">email</label>
                      <input type="text" class="form-control form-control-border" name="email" value="<?php echo $row['email_e']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">etnia</label>
                      <input type="text" class="form-control form-control-border" name="etnia" value="<?php echo $row['etnia']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">sexo</label>
                      <input type="text" class="form-control form-control-border" name="sexo" value="<?php echo $row['sexo_e']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                    <label style="text">tipo de telefono</label>
                      <select class="form-control select2" style="width: 100%;" name="telefono">
                      <?php

                          $sql1 = "SELECT * FROM telefono WHERE IdTelefono=".$row['id_telefono'];
                          $resultado1 = $mysqli->query($sql1);

                          $row1 = $resultado1->fetch_assoc();

                          echo "<option selected  value='".$row1['IdTelefono']."'>".$row1['tipoTelefono']."</option>";

                          $sql2 = "SELECT * FROM telefono";
                          $resultado2 = $mysqli->query($sql2);

                          while ($Fila = $resultado2->fetch_array()) {
                              echo "<option value='".$Fila['IdTelefono']."'>".$Fila['tipoTelefono']."</option>";
                          }
                      ?>   
                      </select>
                    </div>
                  </div>        
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">No telefono</label>
                      <input type="text" class="form-control form-control-border" name="n_telefono" value="<?php echo $row['n_telefono_e']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">calle principal</label>
                      <input type="text" class="form-control form-control-border" name="calle_principal" value="<?php echo $row['calle_principal_e']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">calle secundaria</label>
                      <input type="text" class="form-control form-control-border" name="calle_secundaria" value="<?php echo $row['calle_secundaria_e']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">No casa</label>
                      <input type="text" class="form-control form-control-border" name="n_casa" value="<?php echo $row['n_casa_e']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">barrio</label>
                      <input type="text" class="form-control form-control-border" name="barrio" value="<?php echo $row['barrio_e']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">referencia</label>
                      <input type="text" class="form-control form-control-border" name="referencia" value="<?php echo $row['referencia_e']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Transportación del representado</label>
                      <input type="text" class="form-control form-control-border" name="transporte" value="<?php echo $row['transporte']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">tipo de sangre</label>
                      <input type="text" class="form-control form-control-border" name="sangre" value="<?php echo $row['tipo_sangre']; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                    <label style="text">provincia</label>
                      <select class="form-control select2" style="width: 100%;" name="provincia">
                        <?php

                          $sql1 = "SELECT * FROM provincia WHERE IdProvincia=".$row['id_provincia'];
                          $resultado1 = $mysqli->query($sql1);

                          $row1 = $resultado1->fetch_assoc();

                          echo "<option selected  value='".$row1['IdProvincia']."'>".$row1['nombreProvincia']."</option>";

                          $sql2 = "SELECT * FROM provincia";
                          $resultado2 = $mysqli->query($sql2);

                          while ($Fila = $resultado2->fetch_array()) {
                              echo "<option value='".$Fila['IdProvincia']."'>".$Fila['nombreProvincia']."</option>";
                          }
                      ?>   
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                    <label style="text">canton</label>
                      <select class="form-control select2" style="width: 100%;" name="canton">
                        <?php

                          $sql1 = "SELECT * FROM canton WHERE IdCanton=".$row['id_canton'];
                          $resultado1 = $mysqli->query($sql1);

                          $row1 = $resultado1->fetch_assoc();

                          echo "<option selected  value='".$row1['IdCanton']."'>".$row1['nombreCanton']."</option>";

                          $sql2 = "SELECT * FROM canton";
                          $resultado2 = $mysqli->query($sql2);

                          while ($Fila = $resultado2->fetch_array()) {
                              echo "<option value='".$Fila['IdCanton']."'>".$Fila['nombreCanton']."</option>";
                          }
                      ?>  
                      </select>
                    </div>
                  </div>
                  
                  <div class="col-md-3">
                    <div class="form-group">
                        <?php                        
                          $sql1 = "SELECT * FROM representante WHERE IdRepresentante=".$row['id_representante'];
                          $resultado1 = $mysqli->query($sql1);
                          $row1 = $resultado1->fetch_assoc();                         
                          echo "<input type='hidden' name='representante' value='".$row1['IdRepresentante']."'></input>";                         
                      ?>  
                    </div>
                  </div>

                </div>

                </div>
                  <!-- /.row -->
                </div>
                <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Información del padre</h3>
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
              <div class="container-fluid">
                  <div class="row">        
                    <div class="col-md-3">
                        <div class="form-group">
                          <label for="">No de cédula</label>
                          <input value="<?php echo $row2['identificacion_p']; ?>" name="cedula_p" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                        <label for="">Apellidos</label>
                          <input value="<?php echo $row2['apellidos_p']; ?>" name="apellido_p" type="text" class="form-control form-control-border">                   
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">Nombres</label>
                          <input value="<?php echo $row2['nombres_p']; ?>" name="nombre_p" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">Nacionalidad</label>
                          <select class="form-control select2" style="width: 100%;" name="nacionalidad_p">
                                  <option selected value="<?php echo $row2['nacionalidad_p']; ?>"><?php echo $row2['nacionalidad_p']; ?></option>
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
                          <label for="">email</label>
                          <input value="<?php echo $row2['email_p']; ?>" name="email_p" type="email" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">instruccion</label>
                          <input value="<?php echo $row2['instruccion_p']; ?>"name="instruccion_p" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">ocupacion</label>
                          <input value="<?php echo $row2['ocupacion_p']; ?>" name="ocupacion_p" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">número de teléfono</label>
                          <input value="<?php echo $row2['n_telefono_p']; ?>"name="telefono_p" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">teléfono convencional</label>
                          <input value="<?php echo $row2['convencional_p']; ?>"name="convencional_p" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">calle principal</label>
                          <input value="<?php echo $row2['calle_principal_p']; ?>" name="principal_p" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">calle secundaria</label>
                          <input value="<?php echo $row2['calle_secundaria_p']; ?>" name="secundaria_p" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">No de casa</label>
                          <input value="<?php echo $row2['n_casa_p']; ?>" name="n_casa_p" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">barrio</label>
                          <input value="<?php echo $row2['barrio_p']; ?>" name="barrio_p" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">referencia</label>
                          <input value="<?php echo $row2['referencia_p']; ?>" name="referencia_p" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                            <label for="">provincia</label>
                            <select class="form-control select2" style="width: 100%;" name="provincia_p">
                              <option selected value="<?php echo $row2['provincia_p']; ?>"><?php echo $row2['provincia_p']; ?></option>
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
                            <label for="">canton</label>
                            <input value="<?php echo $row2['canton_p']; ?>"name="canton_p" type="text" class="form-control form-control-border">
                          </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">parroquia</label>
                          <input value="<?php echo $row2['parroquia_p']; ?>"name="parroquia_p" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Información de la madre</h3>
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
              <div class="container-fluid">
                <div class="row">
                      <div class="col-md-3">
                          <div class="form-group">
                            <label for="">No de cédula</label>
                            <input value="<?php echo $row3['identificacion_m']; ?>" name="cedula_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                          <label for="">Apellidos</label>
                            <input value="<?php echo $row3['apellidos_m']; ?>" name="apellido_m" type="text" class="form-control form-control-border">                   
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">Nombres</label>
                            <input value="<?php echo $row3['nombres_m']; ?>" name="nombre_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">Nacionalidad</label>
                            <select class="form-control select2" style="width: 100%;" name="nacionalidad_m">
                                  <option selected value="<?php echo $row3['nacionalidad_m']; ?>"><?php echo $row3['nacionalidad_m']; ?></option>
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
                            <label for="">email</label>
                            <input value="<?php echo $row3['email_m']; ?>"name="email_m" type="email_m" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">instruccion</label>
                            <input value="<?php echo $row3['instruccion_m']; ?>" name="instruccion_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">ocupacion</label>
                            <input value="<?php echo $row3['ocupacion_m']; ?>" name="ocupacion_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">número de teléfono</label>
                            <input value="<?php echo $row3['n_telefono_m']; ?>" name="telefono_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">teléfono convencional</label>
                            <input value="<?php echo $row3['convencional_m']; ?>" name="convencional_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">calle principal</label>
                            <input value="<?php echo $row3['calle_principal_m']; ?>"name="principal_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">calle secundaria</label>
                            <input value="<?php echo $row3['calle_secundaria_m']; ?>" name="secundaria_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">No de casa</label>
                            <input value="<?php echo $row3['n_casa_m']; ?>" name="n_casa_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">barrio</label>
                            <input value="<?php echo $row3['barrio_m']; ?>"name="barrio_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">referencia</label>
                            <input value="<?php echo $row3['referencia_m']; ?>"name="referencia_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="">provincia</label>
                              <select class="form-control select2" style="width: 100%;" name="provincia_m">
                                  <option selected value="<?php echo $row3['provincia_m']; ?>"><?php echo $row3['provincia_m']; ?></option>
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
                              <label for="">canton</label>
                              <input value="<?php echo $row3['canton_m']; ?>"name="canton_m" type="text" class="form-control form-control-border">
                           </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">parroquia</label>
                            <input value="<?php echo $row3['parroquia_m']; ?>"name="parroquia_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">referencia</label>
                            <input value="<?php echo $row3['referencia_m']; ?>"name="referencia_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                    </div>
              </div>
                <div class="text-center">
            <button type="submit" class="btn btn-success toastrDefaultSuccess" name="btnguardar">
              Actualizar
            </button>
            <!-- /.card-body -->
          </div><br>
          </form>
                <!-- /.card-body -->
              
              </div>
              <!-- /.card -->
            </div>
            
          <!-- /.card -->

        </section>

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
  <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
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