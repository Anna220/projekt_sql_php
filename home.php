<!DOCTYPE html>
<html lang="pl">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="wypożyczalnia samochodów używanych">
    <meta name="author" content="Anna Fronczyk">

    <title>Wypożyczalnia samochodó używanych</title>

   
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
   
    <link href="css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
    
     <?php
    
        $db = mysqli_connect('localhost', 'root', '','wypozyczenia');
        mysqli_set_charset($db, 'utf8');
      
      ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Renta a car</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="rezerwacja/index.html">Rezerwacja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="zarezerwuj/zarezerwuj.html">Zarezerwuj</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">kontakt</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading">Rent a car</h1>
              <p class="intro-text">Ofertę w zakresie wynajmu samochodów na terenie Warszawy dopełnia nasz szeroki wybór aut typu van, blaszak, furgon, chłodnia czy minibus 7-osobowy. Doświadczenie i stała obserwacja rynku wypożyczalni pozwala nam przygotowywać najkorzystniejsze oferty pod względem ceny i warunków wynajmu w Warszawie i okolicach. Możliwość wynajmu na okres krótko, średnioterminowy lub długoterminowy.</p>
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
             <h3>Wynajem i wypożyczalnia samochodów osobowych</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem magni corporis ab, hic atque eum, possimus voluptate sequi suscipit quos a cumque doloribus reiciendis laborum quas. Velit iure odio aspernatur.
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, at esse exercitationem, nobis sapiente animi atque cumque, nisi velit accusantium, hic. Minus distinctio cumque excepturi. Quos rem optio ab magni!</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Content Section -->
   
        
        <div class="section">
        <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/599,audi-s8-wynajem-samochodow-luk.144x76.jpg" alt="audi">
                <div class="caption">
                    <h3>Audi S8</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nam id ipsam illo enim dolor soluta. Explicabo quis amet laudantium vitae quae deserunt, sit, voluptate, distinctio perspiciatis natus, nesciunt nobis.</p>
                    <p><a href="#" class="btn btn-default" role="button">Więcej</a></p>
                  </div>
                </div>
              </div>
          
                
                <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/598,ferrari-italia-248-wynajem-sam.144x76.jpg" alt="Ferrari 458 Italia">
                <div class="caption">
                    <h3>Ferrari 458 Italia</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nam id ipsam illo enim dolor soluta. Explicabo quis amet laudantium vitae quae deserunt, sit, voluptate, distinctio perspiciatis natus, nesciunt nobis.</p>
                    <p><a href="#" class="btn btn-default" role="button">Więcej</a></p>
                  </div>
                </div>
              </div>
            
            <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/598,ferrari-italia-248-wynajem-sam.144x76.jpg" alt="Ferrari 458 Italia">
                <div class="caption">
                    <h3>Ferrari 458 Italia</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nam id ipsam illo enim dolor soluta. Explicabo quis amet laudantium vitae quae deserunt, sit, voluptate, distinctio perspiciatis natus, nesciunt nobis.</p>
                    <p><a href="#" class="btn btn-default" role="button">Więcej</a></p>
                  </div>
                </div>
              </div>
            </div>
                    
            <div class="row">
                     
             <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/600,bmw-m2-2017-wynajem-samochodow.144x76%20(1).jpg" alt="BMW M2">
                <div class="caption">
                    <h3>BMW M2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nam id ipsam illo enim dolor soluta. Explicabo quis amet laudantium vitae quae deserunt, sit, voluptate, distinctio perspiciatis natus, nesciunt nobis.</p>
                    <p><a href="#" class="btn btn-default" role="button">Więcej</a></p>
                  </div>
                </div>
              </div>
                  
                  <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/441,mercedes-a45-amg-1.144x76.jpg" alt="Mercedes A45 AMG">
                <div class="caption">
                    <h3>Mercedes A45 AMG</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nam id ipsam illo enim dolor soluta. Explicabo quis amet laudantium vitae quae deserunt, sit, voluptate, distinctio perspiciatis natus, nesciunt nobis.</p>
                    <p><a href="#" class="btn btn-default" role="button">Więcej</a></p>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/441,mercedes-a45-amg-1.144x76.jpg" alt="Mercedes A45 AMG">
                <div class="caption">
                    <h3>Mercedes A45 AMG</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nam id ipsam illo enim dolor soluta. Explicabo quis amet laudantium vitae quae deserunt, sit, voluptate, distinctio perspiciatis natus, nesciunt nobis.</p>
                    <p><a href="#" class="btn btn-default" role="button">Więcej</a></p>
                  </div>
                </div>
              </div>
            </div>
        
            <div class="row">
                   
                    <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/610,2017-nissan-gtr-wynajem-aut-sp.144x76.jpg" alt="Nissan GTR">
                <div class="caption">
                    <h3>Nissan GTR</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nam id ipsam illo enim dolor soluta. Explicabo quis amet laudantium vitae quae deserunt, sit, voluptate, distinctio perspiciatis natus, nesciunt nobis.</p>
                    <p><a href="#" class="btn btn-default" role="button">Więcej</a></p>
                  </div>
                </div>
              </div>
                
                     <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/158,mini-cooper-sport.144x76.jpg" alt="Mini Cooper S">
                <div class="caption">
                    <h3>Mini Cooper S</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nam id ipsam illo enim dolor soluta. Explicabo quis amet laudantium vitae quae deserunt, sit, voluptate, distinctio perspiciatis natus, nesciunt nobis.</p>
                    <p><a href="#" class="btn btn-default" role="button">Więcej</a></p>
                  </div>
                </div>
            </div>
                    <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/158,mini-cooper-sport.144x76.jpg" alt="Mini Cooper S">
                <div class="caption">
                    <h3>Mini Cooper S</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nam id ipsam illo enim dolor soluta. Explicabo quis amet laudantium vitae quae deserunt, sit, voluptate, distinctio perspiciatis natus, nesciunt nobis.</p>
                    <p><a href="#" class="btn btn-default" role="button">Więcej</a></p>
                  </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Kontakt</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium at nemo ducimus harum accusantium possimus repellat dolor et commodi alias consectetur dolore dolorem maxime magnam, quas placeat consequatur illum ea.
            </p>
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg">
                  <i class="fa fa-twitter fa-fw"></i>
                  <span class="network-name">Twitter</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/BlackrockDigital/startbootstrap" class="btn btn-default btn-lg">
                  <i class="fa fa-github fa-fw"></i>
                  <span class="network-name">Facebook</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg">
                  <i class="fa fa-google-plus fa-fw"></i>
                  <span class="network-name">Google+</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; Rent a car 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   
    <script src="js/grayscale.min.js"></script>

    <?php
    
        mysqli_close($db);
    
    ?>
  </body>

</html>
