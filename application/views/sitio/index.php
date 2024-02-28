<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tienda Emi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/sitio/assets/img/favicon.png');?>" rel="icon">
  <link href="<?php echo base_url('assets/sitio/assets/img/03.png');?>" rel="03">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/sitio/assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/sitio/assets/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/sitio/assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/sitio/assets/vendor/aos/aos.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/sitio/assets/vendor/glightbox/css/glightbox.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/sitio/assets/vendor/swiper/swiper-bundle.min.css');?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/sitio/assets/css/main.css');?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.2.1
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Tienda Emi<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="" class="nav-link scrollto">Inicio</a></li>
          <li><a href="#constructions" class="nav-link scrollto">PRODUCTOS</a></li>
          <li><a href="#features" class="nav-link scrollto">Ubicación</a></li>
          <li><a href="<?php echo base_url() . 'iniciar-sesion-usuario'; ?>" class="nav-link scrollto">Usuario</a></li>
          <li><a href="<?php echo base_url() . 'iniciar-sesion-admin'; ?>" class="nav-link scrollto">Administrador</a></li>
          <li><a href="Carrito.php" class="nav-link scrollto">Carrito</a><li>
    
          <li class="nav-item">
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  </div>    
                </ul>
            </li><!-- End Tables Nav -->
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section (fotos corredisas) ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Bienvenidos a <span>Tienda Emi</span></h2>
            <p data-aos="fade-up"></p>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(<?php echo base_url('assets/sitio/assets/img/hero-carousel/13.jpg');?>)"></div>
      <div class="carousel-item" style="background-image: url(<?php echo base_url('assets\sitio\assets\img\hero-carousel/2.jpg');?>)"></div>
      <div class="carousel-item" style="background-image: url(<?php echo base_url('assets/sitio/assets/img/hero-carousel/14.jpg)');?>)"></div>
      <div class="carousel-item" style="background-image: url(<?php echo base_url('assets/sitio/assets/img/hero-carousel/112.jpg');?>)"></div>
      <div class="carousel-item" style="background-image: url(<?php echo base_url('assets/sitio/assets/img/hero-carousel/114.jpg');?>)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>
            PRODUCTOS
          </h2>
          <p></p>
        </div>

        <?php foreach ($productos as $x) : ?> 
    <div class="row gy-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="card-bg">
                            <img src="<?php echo base_url() . '/assets/imagenes/' . $x->imagen_pdto; ?>"width="100%" height="400px" >
                        </div>
                        <div class="product_info">
                            <button type="submit" >
                                <div class="product_name"><a href="<?php echo base_url() . 'agregarProducto'; ?>">COMPRAR</a></div>
                            </button>	
                            <div class="product_price">$<?php echo $x->precio_pdto; ?></div>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-center">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $x->nombre_pdto; ?></h2>
                            <h3 class="card-subtitle"><?php echo $x->detalle_pdto; ?></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

          <!-- End Card Item -->

       

      </div>
    </section><!-- End Constructions Section -->



    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(<?php echo base_url('assets/sitio/assets/img/6.jpg');?>);" data-aos="zoom-in" data-aos-delay="100"></div>
          
        </div>

      </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Estamos Ubicados</h3>
                <p class="fst-italic">
                  En la ciudad de Quibdo; exactamente en Cra. 23 #21-21,Jardin sector giraflores, Quibdó, Chocó
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
              <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d6393.990089791663!2d-76.63957278340806!3d5.682297104082916!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwNDAnNTYuMiJOIDc2wrAzOCczMS43Ilc!5e0!3m2!1ses!2sco!4v1679657695067!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div><!-- End tab content item -->
          
        </div>

      </div>
    </section><!-- End Features Section -->

    <footer id="footer" class="footer">

<div class="footer-content position-relative">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="footer-info">
          <h3>Tienda emi</h3>
          <p>
          Cra. 23 #21-21, Jardin sector giraflores, Quibdó <br>
            Choco - Colombia<br><br>
            <strong>Phone:</strong> 311-695-8198<br>
            <strong>Email:</strong> dayroncasas2002@gmail.com<br>
          </p>
          <div class="social-links d-flex mt-3">
            <a href="https://www.facebook.com/dayronmanuel.maturanacasa" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/maturanacasas/" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
      </div><!-- End footer info column-->

    </div>
  </div>
</div>

<div class="footer-legal text-center position-relative">
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Tienda Emi</span></strong>. Reservados todos los derechos
  </div>
</div>

</footer>
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>
 
  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/sitio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets/sitio/assets/vendor/aos/aos.js');?>"></script>
  <script src="<?php echo base_url('assets/sitio/assets/vendor/glightbox/js/glightbox.min.js');?>"></script>
  <script src="<?php echo base_url('assets/sitio/assets/vendor/isotope-layout/isotope.pkgd.min.js');?>"></script>
  <script src="<?php echo base_url('assets/sitio/assets/vendor/swiper/swiper-bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets/sitio/assets/vendor/purecounter/purecounter_vanilla.js');?>"></script>
  <script src="<?php echo base_url('assets/sitio/assets/vendor/php-email-form/validate.js');?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/sitio/assets/js/main.js');?>"></script>

</body>

</html>