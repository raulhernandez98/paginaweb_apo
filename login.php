<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" id="viewport">
  <title>Registro de Médicos</title>
  <meta id="description" content="">
  <meta id="keywords" content="">

  <!-- Favicons -->
  <link href="imagenes/logo_icono.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:asociacionpediatricadeoriente@gmail.com">asociacionpediatricadeoriente@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+503 7746-8744</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <!-- <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a> -->
          <a href="https://www.facebook.com/share/15AqHRixHN/" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/apediatrica_oriente?igsh=MTN5cHN1czU0a3JrOQ==" class="instagram"><i class="bi bi-instagram"></i></a>
          <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <img src="imagenes/logo_med.JPG">
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php">Inicio<br></a></li>
            <li><a href="index.php#valores">Valores</a></li>
            <li><a href="index.php#historia">Historia</a></li>
            <li><a href="index.php#juntadirectiva">Junta Directiva</a></li>
            <li><a href="registroMedicos.php">Registro de Médicos</a></li>
            <li><a href="directoriomedico.php">Directorio Médico</a></li>
            <li><a href="index.php#contacto">Contacto</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="cta-btn d-none d-sm-block" href="#appointment">Iniciar Sesión</a>
      </div>

    </div>

  </header>

  <main class="main">

    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Iniciar sesión</h2>

      </div><!-- End Section Title -->

    <div class="container col-md-5">
     <form action="modelo/login_medico.php" method="POST" class="formulario" id="formLogin">
  <div class="mb-5">
    <label for="correo" class="form-label">Correo o alias</label>
    <input type="text" class="form-control" id="correo" name="correo" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="contrasena" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="contrasena" id="contrasena">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="mostrarContrasena" name="mostrarContrasena">
    <label class="form-check-label" for="mostrarContrasena">Mostrar Contraseña</label>
  </div>
  <!-- Botón de envío -->
    <div class="d-grid gap-2 col-6 mx-auto mt-5">
        <button class="btn btn-primary" type="submit" name="inicio" id="inicio">Iniciar sesión</button>
    </div>
</form>
    </div>
    </section><!-- /Doctors Section -->


  </main>

 <?php
  include('footer.php')
 ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/alertLogin.js"></script>
</body>

</html>