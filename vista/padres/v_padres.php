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
  <title>Padres</title>

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
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>DATOS DEL PADRE/MADRE</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Información del estudiante</h3>
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
                  <form action="" method="post">
                    <?php
                      include '../../modelo/busqueda_est.php';
                    ?>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="">No identidad</label>
                          <input type="text" class="form-control form-control-border" name="n_cedula_est">
                        </div>
                      </div>
                      <div class="col-md-1" style="padding-top: 37px;">                        
                            <button type="submit" class="btn btn-primary btn-sm" name="busqueda"> 
                                <i class="fa-solid fa-magnifying-glass" style="padding-top: 2px; padding-right: 2px;"></i>
                            </button>                     
                        </div>
                    </div>
                    </form>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">nombres</label>
                          <input type="text" class="form-control form-control-border" disabled value="<?php echo $nombres; ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                            <label for="">apellidos</label>
                            <input disabled value="<?php echo $apellidos;?>" type="text" class="form-control form-control-border">
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
      <!-- /.container-fluid -->
    </section>
<form action="../../modelo/padres/ingresar.php" method="post">
<section class="content">
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
                          <input name="cedula" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                        <label for="">Apellidos</label>
                          <input name="apellido" type="text" class="form-control form-control-border">                   
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">Nombres</label>
                          <input name="nombre" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">Nacionalidad</label>
                          <input name="nacionalidad" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">email</label>
                          <input name="email" type="email" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">instruccion</label>
                          <input  name="instruccion" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">ocupacion</label>
                          <input name="ocupacion" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">número de teléfono</label>
                          <input name="telefono" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">teléfono convencional</label>
                          <input name="convencional" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">calle principal</label>
                          <input name="principal" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">calle secundaria</label>
                          <input name="secundaria" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">No de casa</label>
                          <input name="n_casa" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">barrio</label>
                          <input name="barrio" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">referencia</label>
                          <input name="referencia" type="text" class="form-control form-control-border">
                        </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                            <label for="">provincia</label>
                            <input name="provincia" type="text" class="form-control form-control-border">
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                            <label for="">canton</label>
                            <input name="canton" type="text" class="form-control form-control-border">
                          </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">parroquia</label>
                          <input name="parroquia" type="text" class="form-control form-control-border">
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
      <!-- /.container-fluid -->
    </section>
    <section class="content">
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
                            <input name="cedula_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                          <label for="">Apellidos</label>
                            <input name="apellido_m" type="text" class="form-control form-control-border">                   
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">Nombres</label>
                            <input name="nombre_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">Nacionalidad</label>
                            <input name="nacionalidad_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">email</label>
                            <input name="email_m" type="email_m" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">instruccion</label>
                            <input  name="instruccion_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">ocupacion</label>
                            <input name="ocupacion_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">número de teléfono</label>
                            <input name="telefono_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">teléfono convencional</label>
                            <input name="convencional_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">calle principal</label>
                            <input name="principal_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">calle secundaria</label>
                            <input name="secundaria_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">No de casa</label>
                            <input name="n_casa_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">barrio</label>
                            <input name="barrio_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">referencia</label>
                            <input name="referencia_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="">provincia</label>
                              <input name="provincia_m" type="text" class="form-control form-control-border">
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="">canton</label>
                              <input name="canton_m" type="text" class="form-control form-control-border">
                           </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">parroquia</label>
                            <input name="parroquia_m" type="text" class="form-control form-control-border">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="">referencia</label>
                            <input name="referencia_m" type="text" class="form-control form-control-border">
                          </div>
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
      <!-- /.container-fluid -->
    </section>
        <div class="text-center">
            <button type="submit" class="btn btn-success toastrDefaultSuccess" name="btnguardar">
              Guardar
            </button>
            <!-- /.card-body -->
        </div><br>

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

              <!--Fin del mensaje de Eliminado-->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
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