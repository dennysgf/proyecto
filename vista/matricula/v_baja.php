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
  <title>dar baja | KFC</title>

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
    <!--Datatable plugin CSS file -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
    <!--jQuery library file -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js">
    </script> 
    <!--Datatable plugin JS library file -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    </script>
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
    <div class="content-wrapper"><br>
        <div class="container">
        <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>DAR DE BAJA</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <section class="content">
      <div class="card card-default">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title">Información</h3>
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
                    <form action="../../modelo/matricula/baja.php" method="post">
                        <?php 
                            require_once ("../../conexion/conexion.php");
                            $sql = "SELECT * FROM matricula 
                                    INNER JOIN estudiante on matricula.id_estudiante = estudiante.IdEsudiante
                                    WHERE IdMatricula =".$_GET['IdMatricula'];
                            $resultado = $mysqli->query($sql);
                            $row = $resultado->fetch_assoc();
                         ?>
                    <div class="row">
                        <input type="hidden" name="id_estudiante" value="<?php echo $row['id_estudiante'];?>">
                        <input type="hidden" name="id_matricula" value="<?php echo $row['IdMatricula'];?>">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">nombres</label>
                                    <input type="text" class="form-control form-control-border" disabled value="<?php echo $row['nombre']; ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">apellidos</label>
                                    <input disabled value="<?php echo $row['apellido'];?>" type="text" class="form-control form-control-border">
                                </div>
                         </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">tipo de matricula</label>
                                    <input  value="<?php echo $row['tipo_matricula'];?>" name="matricula" type="text" class="form-control form-control-border" placeholder="ordinaria/extra ordinaria/especial">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">tipo de asignacion</label>
                                    <input  value="<?php echo $row['tipo_asig'];?>" name="asignacion" type="text" class="form-control form-control-border" placeholder="nuevo/antiguo">
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">fecha inscripcion</label>
                                    <input  value="<?php echo $row['fecha_inscrip'];?>" name="fecha" type="date" class="form-control form-control-border" placeholder="nuevo/antiguo">
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">nivel</label>
                                        <select class="form-control select2" style="width: 100%;" name="nivel_m">
                                            <?php
                                            include("../../conexion/conexion.php");
                                            $sql = $mysqli->query("SELECT * FROM niveles WHERE IdNivel=".$row['nivel_id']);
                                            while ($resultado = $sql->fetch_assoc()) {
                                            echo "<option selected value='" . $resultado['Idnivel'] . "'>" . $resultado['nivel'] . "</option>";
                                            }
                                            ?>  
                                        </select>
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">sección</label>
                                        <select class="form-control select2" style="width: 100%;" name="seccion">
                                            <?php
                                            include("../../conexion/conexion.php");
                                            $sql = $mysqli->query("SELECT * FROM secciones WHERE IdSeccion=".$row['seccion_id']);
                                            while ($resultado = $sql->fetch_assoc()) {
                                            echo "<option selected value='" . $resultado['IdSeccion'] . "'>" . $resultado['seccion'] . "</option>";
                                            }
                                            ?>                                  
                                        </select>
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">paralelo</label>
                                        <select class="form-control select2" style="width: 100%;" name="paralelo">
                                            <?php
                                            include("../../conexion/conexion.php");
                                            $sql = $mysqli->query("SELECT * FROM paralelos WHERE IdParalelo=".$row['paralelo_id']);
                                            while ($resultado = $sql->fetch_assoc()) {
                                            echo "<option selected value='" . $resultado['IdParalelo'] . "'>" . $resultado['paralelo'] . "</option>";
                                            }
                                            ?>  
                                        </select>
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">especialidades</label>
                                        <select class="form-control select2" style="width: 100%;" name="especialidades">
                                            <?php
                                            include("../../conexion/conexion.php");
                                            $sql = $mysqli->query("SELECT * FROM especialidades WHERE IdEspecialidad=".$row['especialidad_id']);
                                            while ($resultado = $sql->fetch_assoc()) {
                                            echo "<option selected value='" . $resultado['IdEspecialidad'] . "'>" . $resultado['especialidad'] . "</option>";
                                            }
                                            ?>  
                                        </select>
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">periodo</label>
                                        <select class="form-control select2" style="width: 100%;" name="periodo">
                                            <?php
                                            include("../../conexion/conexion.php");
                                            $sql = $mysqli->query("SELECT * FROM periodos WHERE IdPeriodo=".$row['periodo_id']);
                                            while ($resultado = $sql->fetch_assoc()) {
                                            echo "<option selected value='" . $resultado['IdPeriodo'] . "'>" . $resultado['periodo'] . "</option>";
                                            }
                                            ?>  
                                        </select>
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">tutor</label>
                                        <select class="form-control select2" style="width: 100%;" name="tutor">
                                            <?php
                                            include("../../conexion/conexion.php");
                                            $sql = $mysqli->query("SELECT * FROM tutor WHERE IdTutor=".$row['tutor_id']);
                                            while ($resultado = $sql->fetch_assoc()) {
                                            echo "<option selected value='" . $resultado['IdTutor'] . "'>" . $resultado['nombres'] . "</option>";
                                            }
                                            ?>  
                                        </select>
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">dar de baja al estudiante:</label>
                                    <input value="<?php echo $row['registro'];?>" name="baja" type="text" class="form-control form-control-border" placeholder="nuevo/antiguo">
                                 </div>
                            </div>
                            
                  <!-- /.row -->            
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success toastrDefaultSuccess" name="btnguardar">
                            <i class="fa-regular fa-floppy-disk"></i> guardar</button>
                    </div><br></div>
                    <p style="padding-left:10px;">Para dar baja a un estudiante, en el apartado de dar baja al estudiante; 
                        solo cambie la palabra: "matriculado", por la palabra: "baja"</p>      
                </form>                 
        </section>
      </div><br><br>      
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

<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>