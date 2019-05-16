<?php
if (isset($_POST['login-button'])) {
  require 'dbh2.php';

  $username = $_POST['firstname'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    header("Location: ../login.php?error=emptyFields");
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE users_firstname=? OR users_email=?;";
    $stmt = mysqli_stmt_init($connection); // Initialize the connection
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../login.php?error=sqlStatementError");
      exit();
    }
    // For Admin
    /*$sqlAdmin = "SELECT * FROM users WHERE users_firstname='Admin'";
    if (!mysqli_stmt_prepare($stmt, $sqlAdmin)) {
      header("Location: ../login.php?error=sqlStatementError");
      exit();
    }*/

    else {
      mysqli_stmt_bind_param($stmt, "ss", $username, $password);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        // Compare passwords
        $passwordCheck = password_verify($password, $row['users_password']);
        if ($passwordCheck == false) {
          header("Location: ../login.php?error=wrongPassword");
          exit();
        }
        else if ($passwordCheck == true) {
          session_start();
          $_SESSION['user_id'] = $row['users_id'];
          $_SESSION['user_firstname'] = $row['users_firstname'];

          header("Location: ../loginpage.php?login=sucess");
          exit();
        }
        else {
          header("Location: ../login.php?error=wrongPassword");
          exit();
        }
      }
      else {
        header("Location: ../login.php?error=noUser");
        exit();
      }
    }
  }
}
else {
  header("Location: ../login.php_nothinggg");
  exit();
}
