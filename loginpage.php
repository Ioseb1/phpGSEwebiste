  <?php
    require 'login-header.php';
    session_start();
  ?>
  <body>
    <?php
      if (isset($_SESSION['user_firstname'])) {
        echo '<p>You are logged in</p>';
        echo '<h2 style="text-align:center; color: white;">You are logged in</h2>';
      }
      else {
        echo '<h2 style="text-align:center; color: white;">You are logged out</h2>';
      }
     ?>
     <img src="img/background_image.png" style="margin-left: auto;margin-right: auto;display: block;" alt="">
  </body>
</html>
