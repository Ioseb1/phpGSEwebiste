 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/products.css">
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
          <li class="nav-item active"><a class="nav-link" href="products.php">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
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

    <h1>Check out our Products Line</h1>

    <!-- Products grid system -->

    <div class="container" style="margin-bottom: 70px;">
      <div class="row">

        <div class="col-md-6 col-sm-12">

          <div class="img__wrap">
            <img src="img/Database.jpg" alt="Database">
            <div class="img__description_layer">
              <p class="img__description">Database Systems</p>
            </div>
          </div>

        </div>


        <div class="col-md-6 col-sm-12">
          <div class="img__wrap">
            <img src="img/Games.jpg" alt="Games">
            <div class="img__description_layer">
              <p class="img__description">Games</p>
            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="img__wrap">
            <img src="img/Cloud_System.jpg" alt="Cloud System">
            <div class="img__description_layer">
              <p class="img__description">Cloud Systems</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-12">
          <div class="img__wrap">
            <img src="img/Application.jpg" alt="Web Design">
            <div class="img__description_layer">
              <p class="img__description">Desktop Applications</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="img__wrap">
            <img src="img/Music.jpg" alt="Music">
            <div class="img__description_layer">
              <p class="img__description">Music</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-12">
          <div class="img__wrap">
            <img src="img/Multimedia.jpg" alt="Multimedia">
            <div class="img__description_layer">
              <p class="img__description">Multimedia</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <?php include 'main_footer.php' ?>

