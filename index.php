<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<head>
  <?php include_once "templates/head.php"; ?>
</head>

<body>

<!-- Full Body Container -->
<div id="container">


  <!-- Start Header Section -->
  <div class="hidden-header"></div>
  <header class="clearfix">
    <?php include_once "templates/header.php"; ?>
  </header>
  <!-- End Header Section -->


  <!-- Start Home Page Slider -->
  <section id="home">
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
        <li data-target="#main-slide" data-slide-to="1"></li>
        <li data-target="#main-slide" data-slide-to="2"></li>
      </ol>
      <!--/ Indicators end-->

      <!-- Carousel inner -->
      <div class="carousel-inner">
        <div class="item active">
          <img class="img-responsive" src="images/estadio_2.jpg" alt="slider">
          <div class="slider-content">
            <div class="col-md-12 text-center">
              <h2 class="animated2">
                <span><strong>AD Seseña CF</strong></span>
              </h2>
              <h3 class="animated3">
                <span>El club de tu pueblo</span>
              </h3>
              <p class="animated4"><a href="#" class="slider btn btn-system btn-large">Hazte socio</a>
              </p>
            </div>
          </div>
        </div>
        <!--/ Carousel item end -->
        <div class="item">
          <img class="img-responsive" src="images/equipo_1.jpg" alt="slider">
          <div class="slider-content">
            <div class="col-md-12 text-center">
              <h2 class="animated4">
                <span>Haz de nuestros <strong>triunfos</strong></span>
              </h2>
              <h3 class="animated5">
                <span>tus triunfos</span>
              </h3>
              <p class="animated6"><a href="#" class="slider btn btn-system btn-large">Hazte socio</a>
              </p>
            </div>
          </div>
        </div>
        <!--/ Carousel item end -->
        <div class="item">
          <img class="img-responsive" src="images/bbq_1.jpg" alt="slider">
          <div class="slider-content">
            <div class="col-md-12 text-center">
              <h2 class="animated7 white">
                <span>El único camino al éxito</span>
              </h2>
              <h3 class="animated8 white">
                <span>es ser un <strong>equipo</strong></span>
              </h3>
            </div>
          </div>
        </div>
        <!--/ Carousel item end -->
      </div>
      <!-- Carousel inner end-->

      <!-- Controls -->
      <a class="left carousel-control" href="#main-slide" data-slide="prev">
        <span><i class="fa fa-angle-left"></i></span>
      </a>
      <a class="right carousel-control" href="#main-slide" data-slide="next">
        <span><i class="fa fa-angle-right"></i></span>
      </a>
    </div>
    <!-- /carousel -->
  </section>
  <!-- End Home Page Slider -->


  <!-- Start Content -->
  <div id="content">


    <!-- Start Portfolio Section -->
    <div class="project">
      <div class="container">
        <!-- Start Recent Projects Carousel -->
        <div class="recent-projects">
          <h4 class="title"><span>Galería de fotos</span></h4>
          <div class="projects-carousel touch-carousel">

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <!--<a class="lightbox" data-lightbox-type="ajax" href="https://vimeo.com/78468485"> Pone un video, buscar en plantilla -->
                  <a class="lightbox" title="Foto de equipo" href="images/DSC00709.JPG">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="Foto de equipo" src="images/DSC00709.JPG" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Temporada 2013/2014</h4>
                    <span>Foto de equipo</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="Foto de equipo" href="images/DSC00720.JPG">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="Foto de equipo" src="images/DSC00720.JPG" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Temporada 2013/2014</h4>
                    <span>Foto de equipo</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="López recogiendo el premio por el ascenso a categoría Preferente" href="images/DSC01011.JPG">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="Foto de equipo" src="images/DSC01011.JPG" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Temporada 2014/2015</h4>
                    <span>Homenaje ascenso a Preferente</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="El equipo reunido de barbacoa organizada por A.D Seseña" href="images/DSC01492.JPG">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="Foto de equipo" src="images/DSC01492.JPG" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Temporada 2014/2015</h4>
                    <span>Barbacoa de equipo</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="Foto de equipo" href="images/DSC01882.JPG">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="Foto de equipo" src="images/DSC01882.JPG" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Temporada 2015/2016</h4>
                    <span>Foto de equipo</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="Foto de equipo" href="images/DSC01887.JPG">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="Foto de equipo" src="images/DSC01887.JPG" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Temporada 2015/2016</h4>
                    <span>Foto de equipo</span>
                    <span>Juvenil</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="Partido de ida disputado contra el Guadalajara 'B'" href="images/DSC01881.JPG">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="Foto de equipo" src="images/DSC01881.JPG" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Temporada 2015/2016</h4>
                    <span>Partido contra el Guadalajara</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="Homenaje a nuestro compañero de equipo Manu por su reciente lesión de ligamento" href="images/DSC02156.JPG">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="Foto de equipo" src="images/DSC02156.JPG" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Temporada 2015/2016</h4>
                    <span>Foto de equipo</span>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- End Recent Projects Carousel -->
      </div>
      <!-- .container -->
    </div>
    <!-- End Portfolio Section -->


    <!-- Divider -->
    <div class="hr1 margin-60"></div>


    <!-- Start News & Next Games Section -->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <!-- Classic Heading -->
          <h4 class="classic-title"><span>Últimas noticias</span></h4>

          <!-- Start Latest Posts -->
          <div class="latest-posts-classic">

            <!-- Post 1 -->
            <div class="post-row">
              <div class="left-meta-post">
                <div class="post-date"><span class="day">3</span><span class="month">Abr</span></div>
                <div class="post-type"><i class="fa fa-picture-o"></i></div>
              </div>
              <h3 class="post-title"><a href="#">Partido disputado contra el Casar C.F</a></h3>
              <div class="post-content">
                <p>El domingo pasado el A.D Seseña disputó su último partido de la temporada en casa del Bargas. El partido comenzó con idas y venidas. El ataque visitante fue mejor, por lo que pronto llegó el gol sobre la portería del Bargas. <a class="read-more" href="#">Leer más...</a></p>
              </div>
            </div>

            <!-- Post 2 -->
            <div class="post-row">
              <div class="left-meta-post">
                <div class="post-date"><span class="day">29</span><span class="month">Mar</span></div>
                <div class="post-type"><i class="fa fa-picture-o"></i></div>
              </div>
              <h3 class="post-title"><a href="#">Vuelta a los entrenamientos después de Semana Santa</a></h3>
              <div class="post-content">
                <p>El domingo pasado el A.D Seseña disputó su último partido de la temporada en casa del Bargas. El partido comenzó con idas y venidas. El ataque visitante fue mejor, por lo que pronto llegó el gol sobre la portería del Bargas. <a class="read-more" href="#">Leer más...</a></p>
              </div>
            </div>

          </div>
          <!-- End Latest Posts -->
        </div>
        <!-- .col-md-6 -->

        <div class="col-md-6">

          <!-- Classic Heading -->
          <h4 class="classic-title"><span>Próximos partidos</span></h4>

          <!-- Accordion -->
          <div class="panel-group" id="accordion">

            <!-- Start Accordion 1 -->
            <div class="panel panel-default">
              <!-- Toggle Heading -->
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse-one">
                    <i class="icon-down-open-1 control-icon"></i>
                    <i class="icon-laptop-1"></i> AD Seseña CF - CD Argés Fútbol
                  </a>
                </h4>
              </div>
              <!-- Toggle Content -->
              <div id="collapse-one" class="panel-collapse collapse in">
                <div class="panel-body">El próximo domingo a las 17:30 horas en el estadio de El Quiñón se disputará el partido que enfrentará al AD Seseña CF con el CD Argés Fútbol</div>
              </div>
            </div>
            <!-- End Accordion 1 -->

            <!-- Start Accordion 2 -->
            <div class="panel panel-default">
              <!-- Toggle Heading -->
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse-tow" class="collapsed">
                    <i class="icon-down-open-1 control-icon"></i>
                    <i class="icon-gift-1"></i> CD Quintanar - AD Seseña CF
                  </a>
                </h4>
              </div>
              <!-- Toggle Content -->
              <div id="collapse-tow" class="panel-collapse collapse">
                <div class="panel-body">El próximo domingo a las 17:30 horas en el estadio de El Quiñón se disputará el partido que enfrentará al AD Seseña CF con el CD Quintanar</div>
              </div>
            </div>
            <!-- End Accordion 2 -->

            <!-- Start Accordion 3 -->
            <div class="panel panel-default">
              <!-- Toggle Heading -->
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse-three" class="collapsed">
                    <i class="icon-down-open-1 control-icon"></i>
                    <i class="icon-tint"></i> CD Yuncos - AD Seseña CF
                  </a>
                </h4>
              </div>
              <!-- Toggle Content -->
              <div id="collapse-three" class="panel-collapse collapse">
                <div class="panel-body">El próximo domingo a las 17:30 horas en el estadio de El Quiñón se disputará el partido que enfrentará al AD Seseña CF con el CD Yuncos</div>
              </div>
            </div>
            <!-- End Accordion 3 -->

          </div>
          <!-- End Accordion -->
        </div>
        <!-- .col-md-6 -->
      </div>
      <!-- .row -->
    </div>
    <!-- .container -->
    <!-- End News & Next Games Section -->


    <!-- Divider -->
    <div class="hr1 margin-60"></div>


    <!-- Start Clients/Partner Section -->
    <div class="container">
      <div class="our-clients">

        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Nuestros patrocinadores</span></h4>

        <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5">

          <!-- Client 1 -->
          <div class="client-item item">
            <a href="#"><img src="images/caballeroshnos.jpg" alt="" /></a>
          </div>

          <!-- Client 2 -->
          <div class="client-item item">
            <a href="#"><img src="images/carreras.png" alt="" /></a>
          </div>

          <!-- Client 3 -->
          <div class="client-item item">
            <a href="#"><img src="images/expert.png" alt="" /></a>
          </div>

          <!-- Client 4 -->
          <div class="client-item item">
            <a href="#"><img src="images/cobsa.jpeg" alt="" /></a>
          </div>

          <!-- Client 5 -->
          <div class="client-item item">
            <a href="#"><img src="images/hermida.jpeg" alt="" /></a>
          </div>

          <!-- Client 6 -->
          <div class="client-item item">
            <a href="#"><img src="images/miradas.jpg" alt="" /></a>
          </div>

          <!-- Client 7 -->
          <div class="client-item item">
            <a href="#"><img src="images/asturiana.jpeg" alt="" /></a>
          </div>

          <!-- Client 8 -->
          <div class="client-item item">
            <a href="#"><img src="images/itv.png" alt="" /></a>
          </div>

        </div>
      </div>
      <div class="row" id="ayuda_club">
        <div class="col-md-12 text-right">
          <p><a href="contact.php" class="btn btn-system btn-medium">Ayuda a tu club</a></p>
        </div>
      </div>
    </div>
    <!-- .container -->
    <!-- End Clients/Partner Section -->


  </div>
  <!-- End Content -->


  <!-- Start Footer -->
  <footer>
    <?php include_once "templates/footer.php"; ?>
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