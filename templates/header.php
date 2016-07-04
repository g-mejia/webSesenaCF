<!-- Error al rellenar formulario de registro -->
<?php

if (!empty($_REQUEST['error'])) {
    echo "<p class='error'>" . $_REQUEST['error'] . "</p>";
}

?>

<!-- Start Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Start Contact Info -->
                <ul class="contact-details">
                    <li>
                        <a href="contact.php"><i class="fa fa-map-marker"></i> De Velázquez, Seseña 45223, Toledo</a>
                    </li>
                    <li>
                        <a href="contact.php"><i class="fa fa-envelope-o"></i> adsesenacf@gmail.com</a>
                    </li>
                    <li>
                        <a href="contact.php"><i class="fa fa-phone"></i> +34 690 034 036 / +34 689 031 264</a>
                    </li>
                </ul>
                <!-- End Contact Info -->
            </div>
            <!-- .col-md-4 -->
            <div class="col-md-4">
                <!-- Start Social Links -->
                <ul class="social-list">
                    <li>
                        <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/profile.php?id=100009874547887&fref=ts"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="https://twitter.com/adsesenacf"><i class="fa fa-twitter"></i></a>
                    </li>
                </ul>
                <!-- End Social Links -->
            </div>
            <!-- .col-md-4 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
<!-- .top-bar -->
<!-- End Top Bar -->


<!-- Start  Logo & Navigation  -->
<div class="navbar navbar-default navbar-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" id="header_escudo">
                <a href="index.php">
                    <img alt="Escudo AD Seseña" src="images/escudo_web.jpg" id="escudo">
                </a>
            </div>
        </div>
        <div class="navbar-header">
            <!-- Start Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
        </div>
        <div class="navbar-collapse collapse">
            <!-- Start Search -->
            <div class="search-side">
                <a class="show-search"><i class="fa fa-search"></i></a>
                <div class="search-form">
                    <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                        <input type="text" value="" name="s" id="s" placeholder="Buscar...">
                    </form>
                </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a class="active" href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="plantilla.php">Primer equipo<span class="caret"></span></a>
                    <ul class="dropdown">
                        <li><a href="plantilla.php">Plantilla</a>
                        </li>
                        <li><a href="entrenamientos.php">Entrenamientos</a>
                        </li>
                        <li><a href="calendario.php">Calendario</a>
                        </li>
                        <li><a href="resultados.php">Última jornada</a>
                        </li>
                        <li><a href="clasificacion.php">Clasificación</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Categorías inferiores<span class="caret"></span></a>
                    <ul class="dropdown">
                        <li><a href="#">Juvenil</a>
                        </li>
                        <li><a href="#">Cadete</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="noticias_list.php">Noticias<span class="caret"></span></a>
                    <ul class="dropdown">
                        <li><a href="noticia.php">Noticias 1</a>
                        </li>
                        <li><a href="#">Noticias 2</a>
                        </li>
                        <li><a href="#">Noticias 3</a>
                        </li>
                        <li><a href="#">Noticias 4</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Foro</a>
                </li>
                <li>
                    <a href="contact.php">Contacto</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#registroModal"><span class="glyphicon glyphicon-user"></span>Regístrate</a>
                    <div class="modal fade" id="registroModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <a class="close" data-dismiss="modal">x</a>
                                    <h2>Registro</h2>
                                </div>
                                <div class="modal-body">
                                    <form role="form" id="registroForm" method="post" action="php/registro_bbdd.php">
                                        <div class="form-group">
                                            <label for="mail"><span class="glyphicon glyphicon-user"></span> Usuario</label>
                                            <input type="email" class="form-control" id="mail" name="mail" placeholder="Correo electrónico" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button id="btnSubmit" type="submit" class="btn btn-success">Enviar <span class="glyphicon glyphicon-arrow-right"></span></button>
                                            <button id="btnReset" type="reset" class="btn btn-default">Reestablecer</button>
                                            <div id="RegistroSuccess" style="color:#34495e;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            <!-- End Navigation List -->
        </div>
    </div>

    <!-- Mobile Menu Start -->
    <ul class="wpb-mobile-menu">
        <li>
            <a class="active" href="index.php">Inicio</a>
        </li>
        <li>
            <a href="plantilla.php">Primer equipo</a>
            <ul class="dropdown">
                <li><a href="plantilla.php">Plantilla</a>
                </li>
                <li><a href="entrenamientos.php">Entrenamientos</a>
                </li>
                <li><a href="calendario.php">Calendario</a>
                </li>
                <li><a href="resultados.php">Última jornada</a>
                </li>
                <li><a href="clasificacion.php">Clasificación</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Categorías inferiores</a>
            <ul class="dropdown">
                <li><a href="#">Juvenil</a>
                </li>
                <li><a href="#">Cadete</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="noticias_list.php">Noticias</a>
            <ul class="dropdown">
                <li><a href="noticia.php">Noticias 1</a>
                </li>
                <li><a href="#">Noticias 2</a>
                </li>
                <li><a href="#">Noticias 3</a>
                </li>
                <li><a href="#">Noticias 4</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Foro</a>
        </li>
        <li>
            <a href="contact.php">Contacto</a>
        </li>
        <li>
            <a href="#"><span class="glyphicon glyphicon-user"></span>Regístrate</a>
        </li>
        <li>
            <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
        </li>
    </ul>
    <!-- Mobile Menu End -->

</div>
<!-- End Header Logo & Naviagtion -->