<?php

    session_start();
    if(isset($_SESSION['username'])) {
          if ($_SESSION['username']=='user') {
                header("Location:../pencari/index.php");
          } else if($_SESSION['username']=='pemilik') {
                //Do Nothing
          }
       }
    else {
      header("Location:../../index.php");
    }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
  <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js" integrity="sha512-C7BBF9irt5R7hqbUm2uxtODlUVs+IsNu2UULGuZN7gM+k/mmeG4xvIEac01BtQa4YIkUpp23zZC4wIwuXaPMQA==" crossorigin=""></script>

  <script type="text/javascript" src="../../jquery/jquery.js"></script>
  <script type="text/javascript" src="../../jquery/jquery-ui.js"></script>
  <script type="text/javascript" src="../../js/main.js"></script>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AndaLand</title>

  <!-- Bootstrap core CSS -->
  <link href="../../fw_bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../../fw_bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="../../fw_bootstrap/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="../../fw_bootstrap/css/freelancer.min.css" rel="stylesheet">

    <!--Tulisan-->
    <link href='https://fonts.googleapis.com/css?family=Andada' rel='stylesheet'>
    <style>
        body {
            font-family: 'Andada';
            font-size: 14px;
        }
    </style>

    <!--Button-->
    <style>
        .button {
            background-color: #b38f00;
            border: none;
            border-radius: 8px;
            color: white;
            padding: 10px 14px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .button1{
            background-color: white;
            color: black;
            border: 2px solid #b38f00;
        }
        .button1:hover{
            background-color: #b38f00;
            color: white;
        }
    </style>
</head>

<body onload="checklat()" id="page-top" style="background-color:#ffffff;">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <button class="button button1" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../../pg_chat/index.php">Inbox</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../sy_proses/pr_logout.php">Logout</a>
          </li>
        </ul>
      </div>
  </nav>

  <!-- Header -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container">
      <h1 class="text-uppercase mb-0">Menu Maps Disini</h1>
      <hr class="star-light">
      <h2 class="font-weight-light mb-0">Found Your Land</h2>
    </div>
  </header>

  <!-- Portfolio Grid Section -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">GIS LAND</h2>
      <hr class="star-dark mb-5">
    </div>
  </section>

  <footer class="footer text-center" style="background-color:#b38f00;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-0">Graha Irama lt. 6 suite A - B <br> Jl. H. R. Rasuna Said No.1-2, RT.6/RW.4
              <br>Kuningan Timur, Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950</p>
        </div>
        <div class="col-md-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Around the Web</h4>
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-dribbble"></i>
                </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4 class="text-uppercase mb-4">About AndaLand</h4>
          <p class="lead mb-0">AndaLand is a market-place that trades land/estates that are all over Indonesia. By using AndaLand, you can see lands/estates that are suitable for your needs.
          </p>
        </div>
      </div>
    </div>
  </footer>

  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; AndaLand Team</small>
    </div>
  </div>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="../../fw_bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="../../fw_bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../../fw_bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../../fw_bootstrap/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="../../fw_bootstrap/js/jqBootstrapValidation.js"></script>
  <script src="../../fw_bootstrap/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../../fw_bootstrap/js/freelancer.min.js"></script>

</body>

</html>
