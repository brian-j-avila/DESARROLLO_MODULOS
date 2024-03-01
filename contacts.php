<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Contactanos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="style.css">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>

<body>
  <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
      </div>
      <p>Loading...</p>
    </div>
  </div>
  <div class="page">
    <!-- Page Header-->
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
          data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static"
          data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
          data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand">-<a href="index.html"><img class="brand-logo-light"
                      src="images/logo-default1-140x57.png" alt="" width="140" height="57"
                      srcset="images/logo-default-280x113.png 2x" /></a></div>
              </div>
              <div class="rd-navbar-main-element" >
                <div class="rd-navbar-nav-wrap" >
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Principal</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.php">Sobre Nosotros</a>
                    </li>
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="contacts.php">Contactanos</a>
                    </li>
                  </ul><a class="button button-white button-sm" href="modulo_larry/PHP/login.php">Inicia Sesion</a>
                </div>
              </div><a class="button button-white button-sm" href="modulo_larry/PHP/login.php">Inicia Sesion</a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <section class="parallax-container overlay-1" data-parallax-img="images/contador.jpg">
      <div class="parallax-content breadcrumbs-custom context-dark">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
              <h2 class="breadcrumbs-custom-title">Contactanos</h2>
              <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Principal</a></li>
                <li class="active">Contactanos</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg text-center bg-default">
      <div class="container">
        <div class="row row-50">
          <div class="col-md-6 col-lg-4">
            <div class="box-icon-classic">
              <div class="box-icon-inner decorate-triangle"><span class="icon-xl linearicons-phone-incoming"></span>
              </div>
              <div class="box-icon-caption">
                <h4><a href="tel:#">+57 302-300-4176</a></h4>
                <p>Llama cuando quieras</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="box-icon-classic">
              <div class="box-icon-inner decorate-circle"><span class="icon-xl linearicons-map2"></span></div>
              <div class="box-icon-caption">
                <h4><a href="#">SENA Centro de Industria y Construccion</a></h4>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="box-icon-classic">
              <div class="box-icon-inner decorate-rectangle"><span class="icon-xl linearicons-paper-plane"></span></div>
              <div class="box-icon-caption">
                <h4><a href="mailto:#">SyscPay@gmail.com</a></h4>
                <p>Atencion Personalizada</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Google Map-->
    <div class="info-container">
      <h2>¡Ubicanos!</h2>
      <div id="map">
          <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=4.43173355277305,-75.20922634477876&z=18&output=embed"></iframe>
      </div>
  </div>
    <!-- Contact us-->
    <section class="section section-lg bg-gray-1 text-center">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-9 col-lg-7">
            <h3>Consulta Con Nosotros</h3>
            <!-- RD Mailform-->
            <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
              method="post" action="bat/rd-mailform.php">
              <div class="form-wrap">
                <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                <label class="form-label" for="contact-name">Tu Nombre</label>
              </div>
              <div class="form-wrap">
                <input class="form-input" id="contact-email" type="email" name="email"
                  data-constraints="@Email @Required">
                <label class="form-label" for="contact-email">Correo Electronico</label>
              </div>
              <div class="form-wrap">
                <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric">
                <label class="form-label" for="contact-phone">Telefono</label>
              </div>
              <div class="form-wrap">
                <label class="form-label" for="contact-message">Mensage</label>
                <textarea class="form-input" id="contact-message" name="message"
                  data-constraints="@Required"></textarea>
              </div>
              <div class="row justify-content-center">
                <div class="col-12 col-sm-7 col-lg-5">
                  <button class="button button-block button-lg button-primary" type="submit">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Page Footer-->
    <footer class="section footer-minimal context-dark">
      <div class="container wow-outer">
        <div class="wow fadeIn">
          <div class="row row-60">
            <div class="col-12"><a href="index.html"><img src="images/logo-default1-140x57.png" alt="" width="140"
                  height="57" srcset="images/logo-default-280x113.png 2x" /></a></div>
            <div class="col-12">
              <ul class="footer-minimal-nav">
                <li><a href="#">Menu</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="contacts.html">Contactanos</a></li>
                <li><a href="about-us.html">Sobre Nosotros</a></li>
              </ul>
            </div>
            <div class="col-12">
              <ul class="social-list">
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="#"></a></li>
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="#"></a></li>
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" href="#"></a></li>
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-youtube-play" href="#"></a></li>
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-pinterest-p" href="#"></a></li>
              </ul>
            </div>
          </div>
          <p class="rights"><span>&copy;&nbsp; </span><span
              class="copyright-year"></span><span>&nbsp;</span><span>Pesto</span><span>.&nbsp;</span><span>All Rights
              Reserved.</span><span>&nbsp;</span><a href="#">Privacy Policy</a>. Design&nbsp;by&nbsp;<a
              href="https://www.templatemonster.com">Templatemonster</a></p>
        </div>
      </div>
    </footer>
  </div>
  <div class="snackbars" id="form-output-global"></div>
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>