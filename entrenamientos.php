/**
 * Created by PhpStorm.
 * User: alvaro
 * Date: 4/7/16
 * Time: 12:16
 */

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
  <?php include_once "templates/head.php"; ?>
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


    <!-- Start Page Banner -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Horarios de entrenamiento</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
        <div class="container">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Horas</th>
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>Miércoles</th>
                    <th>Jueves</th>
                    <th>Viernes</th>
                    <th>Sábado</th>
                    <th>Domingo</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>15:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>16:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>17:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>18:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>19:00</td>
                    <td>Juvenil</td>
                    <td></td>
                    <td>Juvenil</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>20:00</td>
                    <td>Juvenil</td>
                    <td>Primer equipo</td>
                    <td>Juvenil</td>
                    <td>Primer equipo</td>
                    <td>Primer equipo</td>
                </tr>
                <tr>
                    <td>21:00</td>
                    <td></td>
                    <td>Primer equipo</td>
                    <td></td>
                    <td>Primer equipo</td>
                    <td>Primer equipo</td>
                </tr>
                <tr>
                    <td>22:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>23:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- End Content -->


<!-- Start Footer -->
<footer>
    <?php include "templates/footer.php"; ?>
</footer>
<!-- End Footer -->

</div>
<!-- End Container -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<script type="text/javascript" src="js/script.js"></script>

</body>

</html>