<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Crea una cuenta</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="http://localhost/chocoana/assets/sitio/assets/img/favicon.png" rel="icon">
  <link href="http://localhost/chocoana/assets/sitio/assets/img/03.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="http://localhost/chocoana/assets/administrador/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/chocoana/assets/administrador/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="http://localhost/chocoana/assets/administrador/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="http://localhost/chocoana/assets/administrador/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="http://localhost/chocoana/assets/administrador/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="http://localhost/chocoana/assets/administrador/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="http://localhost/chocoana/assets/administrador/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="http://localhost/chocoana/assets/administrador/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="<?php echo base_url() . 'inicio'; ?>" class="logo d-flex align-items-center w-auto">
                  <img src="http://localhost/chocoana/assets/administrador/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Tienda Emi</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Registro para Administracion</h5>
                    <p class="text-center small">Ingrese sus datos personales para crear una cuenta</p>
                  </div>

                  <form action="<?php echo base_url() . 'registrar-admin/reg-guardar'; ?>" class="row g-3 needs-validation" method="post">

                    <div class="col-12">
                      <label for="yourName" class="form-label">Su nombre completo</label>
                      <input type="text" name="fullname" class="form-control" required>
                      <div class="invalid-feedback">¡Por favor, escriba su nombre!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Tu correo electrónico</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control" required>
                        <div class="invalid-feedback">Por favor, elija un nombre de usuario.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourId" class="form-label">Numero de identificacion (CC, TI, NIT...)</label>
                      <input type="text" name="user_id" class="form-control" required>
                      <div class="invalid-feedback">¡Por favor, escriba su nombre!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nombre de usuario</label>
                      <input type="text" name="username" class="form-control" required>
                      <div class="invalid-feedback">¡Por favor ingrese una dirección de correo electrónico válida!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Clave</label>
                      <input type="password" name="password" class="form-control" required>
                      <div class="invalid-feedback">¡Por favor, introduzca su contraseña!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">Estoy de acuerdo y acepto los <a href="#">términos y condiciones</a></label>
                        <div class="invalid-feedback">Debe estar de acuerdo antes de enviar.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Crear cuenta</button>
                    </div>
                  </form>
                  <br>
                  <div class="col-12">
                    <p class="small mb-0">¿Ya tienes una cuenta? <a href="<?php echo base_url() . 'iniciar-sesion-admin'; ?>">Iniciar sesión</a></p>
                  </div>

                </div>
              </div>


            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="http://localhost/chocoana/assets/administrador/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="http://localhost/chocoana/assets/administrador/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://localhost/chocoana/assets/administrador/vendor/chart.js/chart.min.js"></script>
  <script src="http://localhost/chocoana/assets/administrador/vendor/echarts/echarts.min.js"></script>
  <script src="http://localhost/chocoana/assets/administrador/vendor/quill/quill.min.js"></script>
  <script src="http://localhost/chocoana/assets/administrador/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="http://localhost/chocoana/assets/administrador/vendor/tinymce/tinymce.min.js"></script>
  <script src="http://localhost/chocoana/assets/administrador/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="http://localhost/chocoana/assets/administrador/js/main.js"></script>

</body>

</html>