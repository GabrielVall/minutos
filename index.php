<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Inicio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
 <?php
 include_once("bd/SQLConexion.php");
 $sql = new SQLConexion();

 ?>

  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Datos generales</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Prueba</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Signos</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Resultados</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav>

  </header>
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Prueba de los 6 minutos</h1>
      <p><span class="typed" data-typed-items="Doc's at work"></span></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      </div>
      <a href="#about" class="btn btn-primary btn-block ">
        <h2 class="m-0 p-1">Comenzar</h2>
      </a>
    </div>
  </section>
  <main id="main">
    <br><br>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>DATOS PERSONALES Y PRIMER TOMA DE SIGNOS</h2>
        
        </div>
        <br><br>
        <div class="row">
          <div >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre completo" required>
                </div>
                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <input type="number" class="form-control" maxlength="3" name="edad" id="edad" placeholder="Edad" required>
                </div>
                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <input type="number" class="form-control" maxlength="10" name="tel" id="tel" placeholder="Teléfono" required>
                </div>
              </div> <br>
              <div class="row">
                <div class="col-md-3 form-group">
                  <input type="number" name="estatura" class="form-control" id="estatura" placeholder="Estatura (centímetros)" required>
                </div>
                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <input type="number" class="form-control" name="peso" id="peso" placeholder="Peso (kilogramos)" required>
                </div>
                <div class="col-md-3 form-group">
                  <input type="number" name="FC" class="form-control" id="fc" placeholder="Frecuencia cardiaca (FC)" required>
                </div>
                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <input type="number" class="form-control" name="TA" id="ta" placeholder="Tensión arterial sistólica (TA)" required>
                </div>
                
                
              </div>
              <br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="number" name="TAD" class="form-control" id="tad" placeholder="Tensión arterial diastólica (TA)" required>
                </div>
                <div class="col-md-3 form-group">
                  <input type="number" name="sat" class="form-control" id="sat" placeholder="Saturación" required>
                </div>
                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <select type="number" class="form-control" name="genero" id="genero" placeholder="Genero" required>
                    <option selected disabled>Selecciona tu genero</option>
                    <option value="0">Hombre</option>
                    <option value="1">Mujer</option>
                  </select>
                </div>
              </div>
              <br>
               <br>
              <div >
              <div class="row justify-content-center d-flex">
                <button class="btnenviar btn btn-md btn-primary"  id="btnagregar">Agregar información</button>
              </div>
              </div>
            </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
   <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Prueba</h2>
        </div>

        <div class="row justify-content-center d-flex">
          <img style="max-width: 100px" src="assets/img/cronometro.png">
          <div class="row justify-content-center d-flex text-center temporizador">
            <div class="values col-12">00:00:00</div>
              <div class="col-4">
                  <button class="btnenviar btn btn-md btn-primary" id="iniciar_crono">Iniciar</button>
              </div>
              <div class="col-4">
                  <button class="btnenviar btn btn-md btn-primary" id="detener_crono">Pausar</button>
              </div>
              <div class="col-4">
                  <button class="btnenviar btn btn-md btn-primary" id="reiniciar_crono">Reiniciar</button>
              </div>
            </div>
            <div class="row justify-content-center d-flex mt-5">
                <button class="btnenviar btn btn-md btn-primary unable" id="sum_vuelta">Agregar vuelta</button>
                <h2 class="text-center mt-5">Vuelta <span id="vuelta_num">0</span></h2>
            </div>
            <div class="row justify-content-center d-flex mt-5">
                <button class="btnenviar btn btn-md btn-danger" id="terminar_crono">Terminar prueba</button>
              </div>
          </div>

        <div class="row">
          <div class="col-lg-6">
            
          </div>
          <div class="col-lg-6">
            
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Segunda toma de signos</h2>
        </div>

        <div class="row">
          <div >
              <div class="row">
                <div class="col-md-3 form-group">
                  <input type="number" class="form-control" name="TAs" id="TAs" placeholder="Tensión arterial sistólica (TA)" required>
                </div>
                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <input type="number" name="TADs" class="form-control" id="TADs" placeholder="Tensión arterial diastólica (TA)" required>
                </div>
                <div class="col-md-3 form-group">
                  <input type="number" name="FCs" class="form-control" id="FCs" placeholder="Frecuencia cardiaca (FC)" required>
                </div>
                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <input type="number" name="sats" class="form-control" id="sats" placeholder="Saturación" required>
                </div>
                
              </div>
              <br>

              <div class="row">
                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <input type="number" name="pac" class="form-control" id="pac" placeholder="Paciente" required>
                </div>
              </div>
               <br>
               <div class="row justify-content-center d-flex">
                <button class="btnenviar btn btn-md btn-primary" id="btn_terminar">Ver resultados</button>
              </div>
            </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 id="titulo_espera">Esperando resultados...</h2>
          <span id="resultados_finales" style="display:none;">
            <h1>Resultados finales</h1>
            <h2 style="color: #0563bb;">V ref:<span id="vref"> </span> (LIN: <span id="lin">412</span>)</h2>
            <button class="btnenviar btn btn-md btn-primary unabled" id="btn_repetir">Repetir prueba</button>
          </span>
        </div>



      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->


    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section> -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Brandon Johnson</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/funciones.js"></script>
  <script src="assets/js/easytimer.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</body>

</html>