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
            <div class="input-group col-6">
                <label for="position" >Foto de documento</label>
                <input type="file" accept="image/png, image/gif, image/jpeg, image/jpg" name="position" id="position" />
            </div>
            <div class="boton">
                <label for="position"></label>
                <a href="#" class="btn btn-next width-50 ml-auto">Siguiente</a>
            </div>
        </div>
        <div class="form-step">
            <div class="input-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" />
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" />
            </div>
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

</html>
