<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <link rel="stylesheet" href="css/signup_style.css">
    <style>
      body {
        background: url("img/image.png");
      }
    </style>
  </head>
  <body>

    <?php
      if (isset($_GET['error'])) {
        if($_GET['error'] == 'emptyFields') {
          echo '<h1 style="text-align: center;
        	color: #ffffff;
        	letter-spacing: 0.18em;">Fill in all fields!</h1>';
        }
        if($_GET['error'] == 'ivalidEmail_or_uid') {
          echo '<h1 style="text-align: center;
        	color: #ffffff;
        	letter-spacing: 0.18em;">Invalid email or username</h1>';
        }
        if($_GET['error'] == 'ivalidEmail') {
          echo '<h1 style="text-align: center;
        	color: #ffffff;
        	letter-spacing: 0.18em;">Invalid email</h1>';
        }
        if($_GET['error'] == 'invalidUsername') {
          echo '<h1 style="text-align: center;
        	color: #ffffff;
        	letter-spacing: 0.18em;">Invalid username</h1>';
        }
        if($_GET['error'] == 'ivalidPassword') {
          echo '<h1 style="text-align: center;
        	color: #ffffff;
        	letter-spacing: 0.18em;">Incorrect password</h1>';
        }
      }
     ?>
    <form action = "includes/signup_form.php" method="POST" class="signup-box">
			<h1>Signup</h1>

			<div class="textBox">
				<input type="text" name="firstname" placeholder="Firstname">
			</div>

      <div class="textBox">
				<input type="text" name="lastname" placeholder="Lastname">
			</div>

      <div class="textBox">
				<input type="text" name="mail" placeholder="E-mail">
			</div>

			<div class="textBox">
				<input type="password" name="password" placeholder="Password">
			</div>

      <div class="textBox">
				<input type="password" name="r-password" placeholder="Repeat password">
			</div>

			<button type="submit" name="signup-submit" class="btn">Sign up</button>
    </form>
  </body>
</html>
