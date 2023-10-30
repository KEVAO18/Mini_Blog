<?php 

include "../config/route.php";

include "../config/config.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="author" content="Kevin Orrego">
    <meta name="description" content="">
    <meta name="keywords" content=""/>
    <meta name="copyright" content="Kevin Orrego" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="cache-control" content="3600" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?=$appName?></title>

    <link rel="icon" href="<?=$serve?>assets/media/<?=$icoName?>.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="<?=$serve?>assets/styles/colores.css">
    <link rel="stylesheet" href="<?=$serve?>assets/styles/margin.css">
    <link rel="stylesheet" href="<?=$serve?>assets/styles/padding.css">
    <link rel="stylesheet" href="<?=$serve?>assets/styles/hw.css">
    <link rel="stylesheet" href="<?=$serve?>assets/styles/st1.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-main sticky-top scrolling-navbar color-2">
      <div class="container-fluid">
        <a class="navbar-brand text-capitalize" href="<?=$serve?>home">
          <?=$appName?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=$serve?>adventure/all">More</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php
      routes($appName, $serve);
    ?>
	<footer class="page-footer font-small bg-main">

        <div class="bg-3">

          <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

              <!-- Grid column -->
              <div class="col-md-6 col-lg-6 text-center text-md-left mb-4 mb-md-0">
                <h6 class="mb-0">Come on to travel through the rarest cultures in the world with us</h6>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row-->

          </div>

        </div>

      <div class="container pt-4">
        <div class="row text-white">
          <div class="col-sm-12 col-md-8 py-2">
              <p>Articulos por: <?=$autor?></p>
              <p>Desarrollado por: <?=$co_autor?></p>
              <p class="sub"><?=$date ?></p>
          </div>
        </div>
      </div>
        <center class="text-white p-2">
          © 2020 Copyright: <?=$appName?>.
        </center>
    </footer>
    <!-- B -->
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
  </body>
</html>