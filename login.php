<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
    <?php include "templates/head.php"; ?>
</head>

<body>

<!-- Full Body Container -->
<div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">
        <?php include "templates/header.php"; ?>
    </header>
    <!-- End Header Section -->

    <div class="container" id="sha">
        <div class="row">
            <div class="col-md-12">
                <img src="images/avatar.png" class="img-responsive" id="avatar">
            </div>
        </div>

        <form class="login" action="php/procesa_login.php" method="POST">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Correo electrónico" name="mail" required autofocus>
            </div>


            <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña" name="pass" required>
            </div>


            <button class="btn btn-lg btn-primary btn-block" type="submit">iniciar sesión</button>

            <div class="checkbox">
                <label class="checkbox">
                    <input type="checkbox" value="1" name="remember"> No cerrar sesión
                </label>
                <p class="help-block"><a href="contact.php">¿No puedes acceder a tu cuenta?</a></p>
            </div>

            <?php
                if(isset($_REQUEST['errorLogin'])):
            ?>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        ¡Error!
                    </div>
                    <div class="panel-body">
                        <p><?php echo "Correo electrónico o contraseña incorrectas"; ?></p>
                    </div>
                </div>

            <?php endif; ?>

        </form>
    </div>

    <!-- Start Footer -->
    <footer>
        <?php include "templates/footer.php"; ?>
    </footer>
    <!-- End Footer -->

</div>
<!-- End Container -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- Scripts Template -->
<?php include_once "templates/scripts.php"; ?>

</body>

</html>

