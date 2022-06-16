<!DOCTYPE html>
<html class="no-js" lang="es">
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>citasmédicas.es</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Pasos</title>
</head>

<body>
    <?php
    include('header.php');
    ?>
    <form action="#" class="form">
        <h1 class="text-center">Datos de registro</h1>
        <!-- Progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step progress-step-active" data-title="Intro"></div>
            <div class="progress-step" data-title="Contact"></div>
        </div>

        <!-- Steps -->
        <div class="form-step form-step-active">
            <div class="input-group col-6">
                <label for="username">Nombre</label>
                <input type="text" name="username" id="username" />
            </div>
            <div class="input-group col-6">
                <label for="position">Apellidos</label>
                <input type="text" name="position" id="position" />
            </div>
            <div class="input-group col-6">
                <label for="position">Numero de identifiación</label>
                <input type="number" name="position" id="position" />
            </div>
            <div class="input-group col-6">
                <label for="position">Fecha de nacimiento</label>
                <input type="date" name="position" id="position" />
            </div>
            <div class="input-group col-6">
                <label for="position">Correo</label>
                <input type="mail" name="position" id="position" />
            </div>
            <div class="input-group col-6">
                <label for="position">Celulat / Teléfono</label>
                <input type="number" name="position" id="position" />
            </div>
            <div class="input-group col-6">
                <label for="position">Departamento</label>
                <input type="text" name="position" id="position" />
            </div>
            <div class="input-group col-6">
                <label for="position">Ciudad de recidencia</label>
                <input type="text" name="position" id="position" />
            </div>
            <div class="input-group col-6">
                <label for="position">Dirección</label>
                <input type="text" name="position" id="position" />
            </div>
            <div class="input-group col-6">
                <label for="position">Barrio</label>
                <input type="text" name="position" id="position" />
            </div>
            <div class=" col-12">
                                <!-- Upload image input-->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                            <input id="upload" type="file" accept="image/png, image/gif, image/jpeg, image/jpg" onchange="readURL(this);" name="imgLogo" class="form-control dnone border-0">
                                            <label id="upload-label" for="upload" class="pd2 font-weight-light w50 text-muted">Foto frontal del documento</label>
                                            <div class="input-group-append w50">
                                                <label for="upload" class="btn w100 btn-light m-0 rounded-pill px-4"> <i class="fas fa-upload mr-2  white"></i><small class="text-uppercase font-weight-bold white">Subir Logo</small></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="image-area mt-4"><img id="imageResult" src="assets/img/background/preview.png" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                                    </div>
                                </div>

                               <!-- <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                    <input id="upload" type="file" accept="image/png, image/gif, image/jpeg, image/jpg" onchange="readURL(this);" name="imgLogo" class="form-control border-0">
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Imágen</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fas fa-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Subir Logo</small></label>
                                    </div>
                                </div> -->

                                <!-- Uploaded image area-->
                <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
            </div>
            <div class="boton">
                <label for="position"></label>
                <a href="#" class="btn btn-next width-50 ml-auto">Siguiente</a>
            </div>
        </div>
        <div class="form-step">
            <!-- |==========================================| -->
        <!-- |=====|| Service Start ||===============| -->
        <section class="pricing1">
            <div class="content_box_100">
                <div class="container">
                    <div class="row no-gutters pricing1__row">
                        <div class=" color_white">
                            <div class="pricing1__item">
                                <div class="pricing1__wrapper text-center">
                                    <div class="pricing1__thumb--style">
                                        <div class="pricing1__thumb">
                                            <img src="assets/img/png-icon/png-icon-19.png" alt="Image">
                                        </div>
                                    </div>
                                    <div class="pricing1__content mt-85">
                                        <h4>Basic</h4>
                                        <p class="m-0">For a month</p>
                                        <h3>$39</h3>
                                        <ul>
                                            <li>
                                                <span class="m-0">Weekly health check-ups</span>
                                            </li>
                                            <li>
                                                <span class="m-0">Lab test system an hour</span>
                                            </li>
                                            <li>
                                                <span class="m-0">Free diet consultation</span>
                                            </li>
                                            <li>
                                                <span class="m-0">Custom exercise plans</span>
                                            </li>
                                        </ul>
                                        <a href="#" class="btn8">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" color_white">
                            <div class="pricing1__item">
                                <div class="pricing1__wrapper text-center">
                                    <div class="pricing1__thumb--style">
                                        <div class="pricing1__thumb">
                                            <img src="assets/img/png-icon/png-icon-19.png" alt="Image">
                                        </div>
                                    </div>
                                    <div class="pricing1__content mt-85">
                                        <h4>Professional</h4>
                                        <p class="m-0">For a month</p>
                                        <h3>$59</h3>
                                        <ul>
                                            <li>
                                                <span class="m-0">Weekly health check-ups</span>
                                            </li>
                                            <li>
                                                <span class="m-0">Lab test system an hour</span>
                                            </li>
                                            <li>
                                                <span class="m-0">Free diet consultation</span>
                                            </li>
                                            <li>
                                                <span class="m-0">Custom exercise plans</span>
                                            </li>
                                        </ul>
                                        <a href="#" class="btn8">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- |==========================================| -->
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Siguiente</a>
                <a href="#" class="btn btn-next">Atras</a>
            </div>
        </div>
    </form>
    <?php
        include('footer.php');
        ?>
</body>
<a href="#" class="scrollToTop">
    <i class="fas fa-level-up-alt"></i>
</a>
<!-- |=====|| ScrollToTop End ||=================| -->
<!-- |==========================================| -->

<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/jquery.waypoints.min.js"></script>
<script src="assets/js/vendor/jquery.easing.1.3.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>
<script src="assets/js/one-page-nav-min.js"></script>
<!-- Ajax Contact js -->
<script src="assets/js/ajax-contact.js"></script>
<!-- Main js -->
<script src="assets/js/main.js"></script>
<!-- |=====|| All js End ||=================| -->
<!-- |==========================================| -->

<script>
    /*  ==========================================
          SHOW UPLOADED IMAGE
      * ========================================== */
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#imageResult')
                      .attr('src', e.target.result);
              };
              reader.readAsDataURL(input.files[0]);
          }
      }

      $(function () {
          $('#upload').on('change', function () {
              readURL(input);
          });
      });

      /*  ==========================================
          SHOW UPLOADED IMAGE NAME
      * ========================================== */
      var input = document.getElementById( 'upload' );
      var infoArea = document.getElementById( 'upload-label' );

      input.addEventListener( 'change', showFileName );
      function showFileName( event ) {
        var input = event.srcElement;
        var fileName = input.files[0].name;
        infoArea.textContent = 'Archivo: ' + fileName;
      }
</script>

</html>
