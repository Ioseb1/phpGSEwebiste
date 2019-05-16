  <?php include 'index_header.php' ?>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 item" src="img/slider1.1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color: #000;">Be Updated</h5>
          <p style="color: #000;">Get updates in every month</p>
        </div>
      </div>
      <div class="carousel-item item">
        <img class="d-block w-100" src="img/slider1.2.jpg" alt="Second slide">
         <div class="carousel-caption d-none d-md-block">
          <h5 style="color: #000;">Management Matters</h5>
          <p style="color: #000;">Make your plans managable with our analytics</p>
        </div>
      </div>
      <div class="carousel-item item">
        <img class="d-block w-100" src="img/slider1.3.jpg" alt="Third slide">
         <div class="carousel-caption d-none d-md-block">
          <h5 style="color: #000;">Excellent Customer Service</h5>
          <p style="color: #000;">Get the information in less then a minute!</p>
        </div>
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

    <div class="img1">
      <h1>GSE Technologies</h1>

      <div class="row1_1">

        <div class="col">
          <img src="img/pic1.jpg" alt="">
          <div class="text-col">
            <ul>
              <li>Great team</li>
              <li>Experience matters</li>
              <li>High skilled co-workres</li>
            </ul>
          </div>
        </div>

        <div class="col">
          <img src="img/agile.jpg" alt="">
          <div class="text-col">
            <ul>
              <li>Agile Software Dev</li>
              <li>More more is less time</li>
              <li>High Quality products</li>
            </ul>
          </div>
        </div>

        <div class="col">
          <img src="img/pic3.jpg" alt="">
          <div class="text-col">
            <ul>
              <li>Multiple platforms</li>
              <li>More are to cover with us</li>
              <li>Get the own Software</li>
            </ul>
          </div>
        </div>

        <div class="col">
          <img src="img/pic4.jpg" alt="">
          <div class="text-col">
            <ul>
              <li>Pay less, get more</li>
              <li>10% discount for first order</li>
              <li>High level financial analysis</li>
            </ul>
          </div>
        </div>

      </div> <!-- end row1_1 -->

    </div> <!-- end img1 -->

    <div class="img2">
      <h1 class="under_h1">Best choice for your business</h1>
      <div class="row2">
        <div class="col2-1">
            <div id="square2"><img src="img/pic6.jpg" alt=""></div>
        </div>

        <div class="col2-2">
            <div class="text-col2">
              <p>We are glad to introduce our company as a great choice
              for your business. Start using our services today and get
              the discount instantly. More you offer, more you get.</p>
            </div>
        </div>
      </div>

      <div class="row2.1">
        <a href="services.php" target="_blank"><button class="btn" type="button" name="button">Services</button></a>
        <a href="products.php" target="_blank"><button class="btn" type="button" name="button">Products</button></a>
        <a href="about_us.php" target="_blank"><button class="btn" type="button" name="button">Company</button></a>
      </div>

    </div> <!-- end img2 -->

    <div class="img3">

      <div class="row3">

        <div class="col">
            <a href="services.php" target="_blank"><p>Services</p></a>
        </div>

        <div class="col">
            <a href="products.php" target="_blank"><p>Products List</p></a>
        </div>

        <div class="col col3.1">
            <a href="pricing.php" target="_blank"><p>Pricing</p></a>
        </div>

        <div class="col col3.1">
          <a href="achieve.php" target="_blank"><p>Achievements</p></a>
        </div>

      </div>

    </div> <!-- end img3 -->

    <div class="img4">
      <h1>Everything you would expect</h1>

      <div class="contaner">
        <div class="row">
          <div class="col-md-6 col-sm-6 pg_1">
            <h3>Project Management</h3>
            <h3>High level development</h3>
            <h3>Affordable Prices</h3>
          </div>

          <div class="col-md-6 col-sm-6 pg_2">
            <h3>Adaptable UI</h3>
            <h3>Workflow Engeneering</h3>
            <h3>1&1 consultation</h3>
          </div>
        </div>
      </div>

    </div> <!-- end img4 -->

    <!-- The Munu JS -->
    <script>
      /*function resize(){
        if ($(window).width() < 490) {
          $("#square2 img").attr('src', 'img/pic5tt.jpg');
        } else {
          $("#square2 img").attr('src', 'img/pic5tt.jpg');
        }
      }
      resize();
      $(window).on('resize', resize);*/
    </script>

    <?php  include 'index_footer.php'?>
