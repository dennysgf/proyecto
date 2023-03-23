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
  <title>eliminar representante | KFC</title>

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
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>¿Está seguro de <strong>eliminar</strong> el representante?</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <form action="../../modelo/mod_eliminar_rep.php" method="post">
        <section class="content">
          <!-- Default box -->
          <div class="card">
          <div class="card card-default">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title">Documentación</h3>
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
              <?php 
                    include "../../conexion/conexion.php";
                    $sql = "SELECT * FROM representante WHERE IdRepresentante =".$_GET['IdRepresentante'];
                    $resultado = $mysqli->query($sql);
                    $row = $resultado->fetch_assoc();
                  ?>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Tipo de documento</label>
                      <input type="hidden" name="IdRepresentante" value="<?php echo $row['IdRepresentante']; ?>">
                      <select class="form-control select2" style="width: 100%;" name="sl_tipodoc" disabled="">
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
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Núnero de cedula/identidad</label>
                      <input name="txtidentificacion" type="text" class="form-control form-control-border"
                        value="<?php echo $row['identificacion']; ?>" disabled="">
                    </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                      <label>Tipo de contacto</label>
                      <select class="form-control select2" style="width: 100%;" name="sl_tipocontacto" disabled="">                      
                      <?php
                          $sql1 = "SELECT * FROM telefono WHERE IdTelefono=".$row['id_telefono'];
                          $resultado1 = $mysqli->query($sql1);

                          $row1 = $resultado1->fetch_assoc();

                          echo "<option selected  value='".$row1['IdTelefono']."'>".$row1['tipoTelefono']."</option>";

                          $sql2 = "SELECT * FROM documento";
                          $resultado2 = $mysqli->query($sql2); 

                          while ($Fila = $resultado2->fetch_array()) {
                              echo "<option value='".$Fila['IdDocumento']."'>".$Fila['tipoTelefono']."</option>";
                          }  
                      ?>
                      </select>
                      </div>
                    </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Número de contacto</label>
                      <input name="txtn_telefono" type="text" class="form-control form-control-border"
                        value="<?php echo $row['n_telefono']; ?>" disabled="">
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
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
                <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Nombres</label>
                      <input name="txtnombres" type="text" class="form-control form-control-border"
                        value="<?php echo $row['nombres']; ?>" disabled="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                    <label for="">Apellidos</label>
                      <input name="txtapellidos" type="text" class="form-control form-control-border"
                        value="<?php echo $row['apellidos']; ?>" disabled="">                   
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Nacionalidad</label>
                      <input name="txtnacionalidad" type="text" class="form-control form-control-border"
                      value="<?php echo $row['nacionalidad']; ?>" disabled="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Correo electronico</label>
                      <input name="txtemail" type="text" class="form-control form-control-border" 
                      value="<?php echo $row['email']; ?>" disabled="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Instrucción</label>
                      <input name="txtinstruccion" type="text" class="form-control form-control-border"
                      value="<?php echo $row['instruccion']; ?>" disabled="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Ocupación</label>
                      <input  name="txtocupacion" type="text" class="form-control form-control-border"
                      value="<?php echo $row['ocupacion']; ?>" disabled="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Sexo</label>
                      <input name="txtsexo" type="text" class="form-control form-control-border"
                      value="<?php echo $row['sexo']; ?>" disabled="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Relación</label>
                      <input name="txtrelacion" type="text" class="form-control form-control-border"
                      value="<?php echo $row['parentezco']; ?>" disabled="">
                    </div>
                  </div>
                </div>
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class="card card-default">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title">Dirección domiciliaria</h3>
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
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Calle principal</label>
                      <input name="txtcalleprincipal" type="text" class="form-control form-control-border"
                      value="<?php echo $row['calle_principal']; ?>" disabled="">
                    </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Calle secundaria</label>
                        <input name="txtcallesecundaria" type="text" class="form-control form-control-border"
                        value="<?php echo $row['calle_secundaria']; ?>" disabled="">
                      </div>
                    </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Núnero de casa</label>
                      <input name="txtn_casa" type="text" class="form-control form-control-border"
                        value="<?php echo $row['n_casa']; ?>" disabled="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Barrio</label>
                      <input name="txtbarrio" type="text" class="form-control form-control-border"
                        value="<?php echo $row['barrio']; ?>" disabled="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Provincia</label>
                      <select class="form-control select2" style="width: 100%;" name="sl_provincia" disabled="">
                      <?php
                          $sql1 = "SELECT * FROM provincia WHERE IdProvincia=".$row['id_provincia'];
                          $resultado1 = $mysqli->query($sql1);

                          $row1 = $resultado1->fetch_assoc();

                          echo "<option selected  value='".$row1['IdProvincia']."'>".$row1['nombreProvincia']."</option>";

                          $sql2 = "SELECT * FROM documento";
                          $resultado2 = $mysqli->query($sql2); 

                          while ($Fila = $resultado2->fetch_array()) {
                              echo "<option value='".$Fila['IdProvincia']."'>".$Fila['nombreProvincia']."</option>";
                          }  
                      ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                    <label>Canton</label>
                      <select class="form-control select2" style="width: 100%;" name="sl_canton" disabled="">
                      <?php
                          $sql1 = "SELECT * FROM canton WHERE IdCanton=".$row['id_canton'];
                          $resultado1 = $mysqli->query($sql1);

                          $row1 = $resultado1->fetch_assoc();

                          echo "<option selected  value='".$row1['IdCanton']."'>".$row1['nombreCanton']."</option>";

                          $sql2 = "SELECT * FROM documento";
                          $resultado2 = $mysqli->query($sql2); 

                          while ($Fila = $resultado2->fetch_array()) {
                              echo "<option value='".$Fila['IdDocumento']."'>".$Fila['tipo']."</option>";
                          }  
                      ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Parroquia</label>
                      <input name="txtparroquia" type="text" class="form-control form-control-border"
                        value="<?php echo $row['parroquia']; ?>" disabled="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Referencia</label>
                      <input name="txtreferencia" type="text" class="form-control form-control-border"
                        value="<?php echo $row['referencia']; ?>" disabled="">
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>

              </div>
              <!-- /.card -->
            </div>
            
          <div class="text-center">
            <button type="submit" class="btn btn-danger toastrDefaultSuccess" name="btnguardar">
            <i class="fa-solid fa-trash-can"></i> 
              Eliminar
            </button>
            <!-- /.card-body -->
          </div><br><br>
          <!-- /.card -->

        </section>
      </form>
      <?php
      if (isset($_GET['registrado'])) {
      ?>
      <script>
        Swal.fire(
          'Registrado!',
          "<?php echo $_GET['registrado'] ?>",
          'success'
        )
      </script>
      <?php
      }
      ?>
      <?php
      if (isset($_GET['error'])) {
      ?>
      <script>
        Swal.fire({
          icon:'error',
          title:'Error.!',
          text:"<?php echo $_GET['error'] ?>"
        })
      </script>
      <?php
      }
      ?>
    <script src="sweetalert2.all.min.js"></script>      
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023-2030 <a href="#">INSTPP</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

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
  <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
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
</body>

</html>