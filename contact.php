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

    <!-- Start Map -->
    <div id="map" data-position-latitude="40.1245" data-position-longitude="-3.6770"></div>
    <script>
      (function($) {
        $.fn.CustomMap = function(options) {

          var posLatitude = $('#map').data('position-latitude'),
            posLongitude = $('#map').data('position-longitude');

          var settings = $.extend({
            home: {
              latitude: posLatitude,
              longitude: posLongitude
            },
            text: '<div class="map-popup"><h4>Web Development | ZoOm-Arts</h4><p>A web development blog for all your HTML5 and WordPress needs.</p></div>',
            icon_url: $('#map').data('marker-img'),
            zoom: 15
          }, options);

          var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

          return this.each(function() {
            var element = $(this);

            var options = {
              zoom: settings.zoom,
              center: coords,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              mapTypeControl: false,
              scaleControl: false,
              streetViewControl: false,
              panControl: true,
              disableDefaultUI: true,
              zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT
              },
              overviewMapControl: true,
            };

            var map = new google.maps.Map(element[0], options);

            var icon = {
              url: settings.icon_url,
              origin: new google.maps.Point(0, 0)
            };

            var marker = new google.maps.Marker({
              position: coords,
              map: map,
              icon: icon,
              draggable: false
            });

            var info = new google.maps.InfoWindow({
              content: settings.text
            });

            google.maps.event.addListener(marker, 'click', function() {
              info.open(map, marker);
            });

            var styles = [{
              "featureType": "landscape",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 65
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "poi",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 51
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "road.highway",
              "stylers": [{
                "saturation": -100
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "road.arterial",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 30
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "road.local",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 40
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "transit",
              "stylers": [{
                "saturation": -100
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "administrative.province",
              "stylers": [{
                "visibility": "on"
              }]
            }, {
              "featureType": "water",
              "elementType": "labels",
              "stylers": [{
                "visibility": "on"
              }, {
                "lightness": -25
              }, {
                "saturation": -100
              }]
            }, {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [{
                "hue": "#ffff00"
              }, {
                "lightness": -25
              }, {
                "saturation": -97
              }]
            }];

            map.setOptions({
              styles: styles
            });
          });

        };
      }(jQuery));

      jQuery(document).ready(function() {
        jQuery('#map').CustomMap();
      });
    </script>
    <!-- End Map -->

    <!-- Start Content -->
    <div id="content">
      <div class="container">

        <div class="row">

          <div class="col-md-8">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Contacta con nosotros</span></h4>

            <!-- Start Contact Form -->
            <form role="form" class="contact-form" id="contact-form" method="post" action="php/send.php" enctype="multipart/form-data">
              <div class="form-group">
                <div class="controls">
                  <input type="text" name="name" placeholder="Nombre" required>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="email" class="email" name="email" placeholder="Correo electrónico" required>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" name="subject" placeholder="Asunto" required>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <textarea rows="7" name="message" placeholder="Mensaje"></textarea>
                </div>
              </div>
              <button type="submit" id="formSubmit" class="btn-system btn-large">Enviar</button>

              <?php
              if(isset($_REQUEST['errorContact'])):
                ?>
                <div class="panel panel-danger">
                  <div class="panel-heading">
                    ¡Error!
                  </div>
                  <div class="panel-body">
                    <p><?php echo "Dirección de correo no válida"; ?></p>
                  </div>
                </div>

              <?php endif; ?>
              <?php
              if(isset($_REQUEST['successContact'])):
                ?>
                <div class="panel panel-success">
                  <div class="panel-heading">
                    ¡Hecho!
                  </div>
                  <div class="panel-body">
                    <p><?php echo "¡Su mensaje fue enviado!"; ?></p>
                  </div>
                </div>

              <?php endif; ?>
            </form>
            <!-- End Contact Form -->

          </div>

          <div class="col-md-4">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Información</span></h4>

            <!-- Some Info -->
            <p>Somos el club de tu pueblo. Estamos cerca de ti. ¡Contacta con nosotros!</p>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:10px;"></div>

            <!-- Info - Icons List -->
            <ul class="icons-list">
              <li><i class="fa fa-globe">  </i> <strong>Dirección:</strong> De Velázquez, Seseña 45223, Toledo</li>
              <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> adsesenacf@gmail.com</li>
              <li><i class="fa fa-mobile"></i> <strong>Teléfono:</strong> +34 690 034 036 / +34 689 031 264</li>
            </ul>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:15px;"></div>

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Horario de oficina</span></h4>

            <!-- Info - List -->
            <ul class="list-unstyled">
              <li><strong>Lunes - Viernes</strong> - de 17:00 a 22:00</li>
              <li><strong>Sabádos</strong> - de 9:00 a 14:00</li>
              <li><strong>Domingos</strong> - de 15:00 a 19:00</li>
            </ul>

          </div>

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

  <!--<script type="text/javascript">
    //Contact Form

    $('#FormSubmit').click(function() {

      $.post("php/send.php", $(".contact-form").serialize(), function(response) {
        $('#success').html(response);
      });
      return false;

    });
  </script>-->

</body>

</html>