/**
 * Created by PhpStorm.
 * User: alvaro
 * Date: 18/5/16
 * Time: 1:34
 */

<?php require_once('php/restringido.php'); ?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
    <?php include "templates/head.php"; ?>
</head>

<body>

<!-- Container -->
<div id="container">

    <!-- Start Header -->
    <div class="hidden-header"></div>
    <header class="clearfix">
        <?php include "templates/header.php"; ?>
    </header>
    <!-- End Header -->

    <!-- Start Content -->
    <div id="content">
        <div class="container">
            <div class="table" id="usuarios">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Pepe@gmail.com</td>
                        <td>12345</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End content -->

    <!-- Start Footer -->
    <footer>
        <?php include "templates/footer.php"; ?>
    </footer>
    <!-- End Footer -->

</div>
<!-- End Container -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<?php include_once "templates/scripts.php"; ?>


<!-- Lista usuarios -->
<script type="text/javascript">
$("document").ready(function () {
    var url = window.location.pathname;
    var dir = url.substring(0, url.lastIndexOf('/')); // url del servidor, p.ej. http://localhost/departamentosSQL
    $.getJSON(dir + '/php/json.php?callback=?', function (data) {
        $('tbody').html("");
        $.each(data, function (i, item) {

            $('tbody').append('<tr><td>' + item.email + '</td><td>' + item.contrasena + '</td></tr>');

        });
    });
});
</script>

</body>

</html>