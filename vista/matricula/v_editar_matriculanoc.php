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
  <title>editar|matricula</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <!--Datatable plugin CSS file -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
    <!--jQuery library file -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js">
    </script> 
    <!--Datatable plugin JS library file -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    </script>
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
    <div class="content-wrapper"><br>
        <div class="container">
        <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>EDITAR</h1>
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
                    <form action="../../modelo/matricula/actualizarnoc.php" method="post">
                        <?php 
                            require_once ("../../conexion/conexion.php");
                            $sql = "SELECT * FROM matriculanoc 
                                    INNER JOIN nocturna on matriculanoc.id_nocturna = nocturna.IdNocturna
                                    WHERE IdMatriculanoc =".$_GET['IdMatriculanoc'];
                            $resultado = $mysqli->query($sql);
                            $row = $resultado->fetch_assoc();
                         ?>
                    <div class="row">
                        <input type="hidden" name="id_estudiante" value="<?php echo $row['id_nocturna'];?>">
                        <input type="hidden" name="id_matricula" value="<?php echo $row['IdMatriculanoc'];?>">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">nombres</label>
                                    <input type="text" class="form-control form-control-border" disabled value="<?php echo $row['nombres_noc']; ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">tipo de matricula</label>
                                    <input value="<?php echo $row['tipo_matricula'];?>" name="matricula" type="text" class="form-control form-control-border" placeholder="ordinaria/extra ordinaria/especial">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">tipo de asignacion</label>
                                    <input value="<?php echo $row['tipo_asig'];?>" name="asignacion" type="text" class="form-control form-control-border" placeholder="nuevo/antiguo">
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">fecha inscripcion</label>
                                    <input value="<?php echo $row['fecha_inscrip'];?>" name="fecha" type="date" class="form-control form-control-border" placeholder="nuevo/antiguo">
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
                                            $sql2 = "SELECT * FROM niveles";
                                            $resultado2 = $mysqli->query($sql2);
                                            while ($Fila = $resultado2->fetch_array()) {
                                                echo "<option value='".$Fila['Idnivel']."'>".$Fila['nivel']."</option>";
                                        
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
                                            $sql2 = "SELECT * FROM secciones";
                                            $resultado2 = $mysqli->query($sql2);
                                            while ($Fila = $resultado2->fetch_array()) {
                                                echo "<option value='".$Fila['IdSeccion']."'>".$Fila['seccion']."</option>";
                                        
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
                                            $sql2 = "SELECT * FROM paralelos";
                                            $resultado2 = $mysqli->query($sql2);
                                            while ($Fila = $resultado2->fetch_array()) {
                                                echo "<option value='".$Fila['IdParalelo']."'>".$Fila['paralelo']."</option>";
                                        
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
                                            $sql2 = "SELECT * FROM especialidades";
                                            $resultado2 = $mysqli->query($sql2);
                                            while ($Fila = $resultado2->fetch_array()) {
                                                echo "<option value='".$Fila['IdEspecialidad']."'>".$Fila['especialidad']."</option>";
                                        
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
                                            $sql2 = "SELECT * FROM periodos";
                                            $resultado2 = $mysqli->query($sql2);
                                            while ($Fila = $resultado2->fetch_array()) {
                                                echo "<option value='".$Fila['IdPeriodo']."'>".$Fila['periodo']."</option>";
                                        
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
                                            $sql2 = "SELECT * FROM tutor";
                                            $resultado2 = $mysqli->query($sql2);
                                            while ($Fila = $resultado2->fetch_array()) {
                                                echo "<option value='".$Fila['IdTutor']."'>".$Fila['nombres']."</option>";
                                        
                                            }
                                            ?>  
                                        </select>
                                 </div>
                            </div>
                  <!-- /.row -->            
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success toastrDefaultSuccess" name="btnguardar">
                            <i class="fa-regular fa-floppy-disk"></i>Guardar</button>
                    </div><br></div>      
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

<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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