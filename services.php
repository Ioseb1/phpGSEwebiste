<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test Project</title>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <link rel="stylesheet" href="css/custom_bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/services.css">
    </body>
    <link rel="stylesheet" href="css/animations.css" type="text/css">
    <!-- Bootstrap CSS -->
    <style media="screen">
      .carousel-item {
        height: 70%;
        min-height: 200px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }

      body {
        background-color: #ebebe0;
      }
    </style>
  </head>
  <body>
    <!-- Header -->
    <nav class="navbar navbar-expand-md bg-success navbar-dark">
      <a class="navbar-brand" href="index.php">G S E</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center" id="collapsibleNavbar">
        <ul class="nav navbar-nav" style="font-size: 20px; font-family: 'Rajdhani', sans-serif;">
          <li class="nav-iteme"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
          <li class="nav-item active"><a class="nav-link" href="services.php">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="about_us.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
        </ul>
        <ul class="navbar-nav ml-auto" style="font-size: 20px; font-family: 'Rajdhani', sans-serif;">
          <li class="nav-item"><a class="nav-link" href="login.php" target="_blank">Log In</a></li>
          <li class="nav-item"><a class="nav-link" href="signup.php" target="_blank">Sign Up</a></li>
        </ul>
      </div>
    </nav>
    <!-- End Header -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 item" src="img/Services_1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color: #000;">Web Development</h5>
          <p style="color: #000;">Build your custom website with us</p>
        </div>
      </div>
      <div class="carousel-item item">
        <img class="d-block w-100" src="img/Services_2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item item">
        <img class="d-block w-100" src="img/Services_3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Content container -->
  <div class="container">
    <div class="row">

      <div class="col-md-4 col-sm-12">
        <div class="card text-center">
          <div class="card-block">
            <img src="img/Neural_Networking.png" alt="" class="img-fluid">
            <div class="card-title">
              Neural Networking
            </div>
            <div class="card-text">Do you want to make your company or
            your future project successfull? Give it a try in Neural
            networing. We are always ready to help you.</div>
            <a href="https://entuity.com/" target="_blank" class="btn btn-success" style="margin:10px 0 10px 0; width:80px;">Go</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-12">
        <div class="card text-center">
          <div class="card-block">
            <img src="img/Networking.jpg" alt="" class="img-fluid">
            <div class="card-title">
              Networking
            </div>
            <div class="card-text">Want to get advanced networking for
            great value? Contact us and start using our networking soon</div>
            <a href="index.html" class="btn btn-success" style="margin:10px 0 10px 0; width:80px;">Go</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-12">
        <div class="card text-center">
          <div class="card-block">
            <img src="img/System_security.jpg" alt="" class="img-fluid">
            <div class="card-title">
              Security Analitycs
            </div>
            <div class="card-text">Get the secure system in your company
              by help from our security specialists.</div>
            <a href="index.html" class="btn btn-success" style="margin:10px 0 10px 0; width:80px;">Go</a>
          </div>
        </div>
      </div>

    </div>

    <div class="row" style="margin-top: 90px;">
      <div class="col-md-4 col-sm-12">
        <div class="card text-center">
          <div class="card-block">
            <img src="img/Custom_Android.jpg" alt="" class="img-fluid">
            <div class="card-title">
              Android App Dev
            </div>
            <div class="card-text">Order your custom android application. Choose
              your pattern and functionality.Our developers are waiting.</div>
            <a href="index.html" class="btn btn-success" style="margin:10px 0 10px 0; width:80px;">Go</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-12">
        <div class="card text-center">
          <div class="card-block">
            <img src="img/Analytics1.1.jpg" alt="" class="img-fluid">
            <div class="card-title">
              Analitics
            </div>
            <div class="card-text">Want to get the high level business analitics service?
              our scientists and analitic professionals are ready to start working for you.</div>
            <a href="index.html" class="btn btn-success" style="margin:10px 0 10px 0; width:80px;">Go</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-12">
        <div class="card text-center">
          <div class="card-block">
            <img src="img/Web_design.jpg" alt="" class="img-fluid">
            <div class="card-title">
              Web Development
            </div>
            <div class="card-text">Create your custom choice design pattern and
              build own website with us! Start now free and get discount for every log in.</div>
            <a href="index.html" class="btn btn-success" style="margin:10px 0 10px 0; width:80px;">Go</a>
          </div>
        </div>
      </div>

    </div>

  </div>

  <?php 
    include 'main_footer.php';
  ?>
