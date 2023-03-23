<!doctype html>
<html lang="en">
  <head>
   <!--====== Title ======-->
    <title>KFC</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="./logoKFC.png" type="image/png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Font Awesome -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"rel="stylesheet"/>
		<!-- MDB -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="formato.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Acceso Administrativo</title>
  </head>
  <body>
    <!-- As a link -->
    <nav class="navbar navbar-expand-lg" style="background:#005187;">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
            <h3 class="display-5" style="padding-top:15px;color:white;">COLEGIO DE BACHILLERATO </h3>
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </nav>
    <nav class="navbar navbar-expand-lg" style="background:#c5c6c8;">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
            <h3 class="display-6"style="color:#005187;">KLEBER FRANCO CRUZ</h3> 
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </nav>

  <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="./logoKFC.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="./modelo/login.php" method="POST">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Inicio de sesión</p>
          </div>

          <!-- Email input -->
          <div class="form-group">
          <label class="form-label" for="form3Example3"><i class="fa-solid fa-user"></i> Usuario:</label>
            <input  name="nombre_usuario" type="text" class="form-control form-control-lg"
              placeholder="Ingrese su usuario" />
          </div><br>

          <!-- Password input -->
          <div class="form-group">
            <label class="form-label" for="form3Example4"><i class="fa-solid fa-key"></i> Contraseña:</label>
            <input  name="contrasena" type="password" class="form-control form-control-lg"
              placeholder="Ingrese su contraseña personal" />
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;"><i class="fa-solid fa-right-to-bracket"></i> Ingresar</button>
          </div>

        </form>
      </div>
      <?php
      if (isset($_GET['error'])) {
      ?>
      <script>
        Swal.fire({
          icon:'error',
          title:'ERROR.!',
          text:"<?php echo $_GET['error'] ?>"
        })
      </script>
      <?php
      }
      ?>
    <script src="sweetalert2.all.min.js"></script>   
    </div>
  </div>
    <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      INSTPP © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/Instipp1" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://twitter.com/intsipp?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://api.whatsapp.com/send?phone=%2B593985386700&fbclid=IwAR3Yzj5p_Ng6uUuv1w1TcYqWEdus1twD_1B37HPne7Fa9_KCJKtTEheK-No" class="text-white me-4">
      <i class="fa-brands fa-whatsapp"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
  </body>
</html>