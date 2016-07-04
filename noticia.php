/**
 * Created by PhpStorm.
 * User: alvaro
 * Date: 20/6/16
 * Time: 13:55
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


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row blog-post-page">
          <div class="col-md-9 blog-box">

            <!-- Start Single Post Area -->
            <div class="blog-post gallery-post">

              <!-- Start Single Post (Gallery Slider) -->
              <div class="post-head">
                <div class="touch-slider post-slider">
                  <div class="item">
                    <a class="lightbox" title="This is an image title" href="images/blog-02.jpg" data-lightbox-gallery="gallery1">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/blog-02.jpg">
                    </a>
                  </div>
                  <div class="item">
                    <a class="lightbox" title="This is an image title" href="images/blog-03.jpg" data-lightbox-gallery="gallery1">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/blog-03.jpg">
                    </a>
                  </div>
                  <div class="item">
                    <a class="lightbox" title="This is an image title" href="images/blog-04.jpg" data-lightbox-gallery="gallery1">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/blog-04.jpg">
                    </a>
                  </div>
                </div>
              </div>
              <!-- End Single Post (Gallery) -->

              <!-- Start Single Post Content -->
              <div class="post-content">
                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                <h2>Gallery Post With Nice Lightbox</h2>
                <ul class="post-meta">
                  <li>By <a href="#">iThemesLab</a></li>
                  <li>December 30, 2013</li>
                  <li><a href="#">4 Comments</a></li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>

                <div class="post-bottom clearfix">
                  <div class="post-share">
                    <span>Comparte esta noticia:</span>
                    <a class="facebook" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                    <a class="gplus" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a>
                  </div>
                </div>

              </div>
              <!-- End Single Post Content -->

            </div>
            <!-- End Single Post Area -->

          </div>


          <!-- Sidebar -->
          <div class="col-md-3 sidebar right-sidebar">

            <!-- Popular Posts widget -->
            <div class="widget widget-popular-posts">
              <h4>Noticias más recientes <span class="head-line"></span></h4>
              <ul>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="images/blog-mini-01.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                    <span>Jul 29 2013</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="images/blog-mini-02.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                    <span>Jul 29 2013</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="images/blog-mini-03.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                    <span>Jul 29 2013</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
              </ul>
            </div>

          </div>
          <!--End sidebar-->


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

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>