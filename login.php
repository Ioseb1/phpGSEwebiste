<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log In</title>
	<link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
	<link rel="stylesheet" href="css/login_style.css">
	<style>
		body {
			background: url("img/image.png");
		}
	</style>
</head>

	<body>
		<form action="includes/login_form.php" method="POST" class="login-box">
			<h1>Login</h1>

			<div class="textBox">
				<i class="fa fa-user" area-hidden="true"></i>
				<input type="text" name="firstname" placeholder="User/E-mail">
			</div>

			<div class="textBox">
				<i class="fa fa-lock" area-hidden="true"></i>
				<input type="password" name="password" placeholder="Password">
			</div>
			<button class="btn" name="login-button">Log in</button>
		</form>
	</body>
</html>
