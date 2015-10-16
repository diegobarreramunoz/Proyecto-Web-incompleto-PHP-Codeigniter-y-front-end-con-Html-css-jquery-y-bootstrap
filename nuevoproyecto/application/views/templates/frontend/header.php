<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/misestilos.css">
</head>
<body>
  <header>
      <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">Criadero RoswellBull!</h1>
            <h4 class="text-center">Especialistas en Bull-Terrier</h4>
        </div>
      </div>
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Principal</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">Nosotros <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Contacto</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Machos
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <?php
                      foreach ($razas as $razasx1) {
                        if ($razasx1->Machos > 0) {
                          $url = 'categoria/'.$razasx1->ID_RAZA.'/M/'.$razasx1->NOMBRE_RAZA;
                          echo '<li>'.anchor($url, ucwords(strtolower($razasx1->NOMBRE_RAZA))).'</li>';
                        }
                      }
                    ?>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hembras
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <?php
                      foreach ($razas as $razasx2) {
                        if ($razasx2->Hembras > 0) {
                          $url = 'categoria/'.$razasx2->ID_RAZA.'/F/'.$razasx2->NOMBRE_RAZA;
                          echo '<li>'.anchor($url, ucwords(strtolower($razasx2->NOMBRE_RAZA))).'</li>';
                        }
                      }
                    ?>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cachorros
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <?php
                      foreach ($razas as $razasx3) {
                        if ($razasx3->Cachorros > 0) {
                          $url = 'categoria/'.$razasx3->ID_RAZA.'/C/'.$razasx3->NOMBRE_RAZA;
                          echo '<li>'.anchor($url, ucwords(strtolower($razasx3->NOMBRE_RAZA))).'</li>';
                        }
                      }
                    ?>
                  </ul>
                </li>
                <li><a href="#">Galeria</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Otros Servicios<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                     <?php
                      foreach ($servicios as $serviciosx1) {
                        echo '<li><a href="#">'.ucwords(strtolower($serviciosx1->NOMBRE_SERVICIO)).'</a></li>';
                      }
                    ?>
                  </ul>
                </li>
              </ul>
              
              <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Ingrese una Busqueda">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
              </form>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>