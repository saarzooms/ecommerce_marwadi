<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Bootstrap 4 Admin Template</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>


    <!-- /# sidebar -->
<?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;


<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;


    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
              <div class="page-header">
                <div class="page-title">
                  <h1>Hello, <span>Welcome Here</span></h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Chartist</li>
                  </ol>
                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            <div class="row">
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">Simple Line Chart</h4>
                    <div class="ct-sm-line-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">Line Chart with Area</h4>
                    <div class="ct-area-ln-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">BI-Polar Line Chart</h4>
                    <div id="ct-polar-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">Animation Chart</h4>
                    <div class="ct-animation-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">Radar Chart</h4>
                    <div class="ct-bar-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">SVG animation chart</h4>
                    <div class="ct-svg-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">GAUGE CHART</h4>
                    <div class="ct-gauge-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">Donute chart</h4>
                    <div class="ct-donute-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="footer">
                  <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <div id="search">
      <button type="button" class="close">×</button>
      <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </div>
    <!-- jquery vendor -->
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="js/lib/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
    <!-- bootstrap -->


    
    <script src="js/lib/bootstrap.min.js"></script>
    <!-- scripit init-->

  </body>

</html>
<?php /**PATH C:\xampp\htdocs\Internship2023\ecommerce_marwadi\bootstraptemp2\resources\views/admin/charts.blade.php ENDPATH**/ ?>