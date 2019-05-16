<?php

if (isset($_POST['signup-submit'])) {
  #header("Location: ../signup.php?Success");
  require 'dbh2.php';

  $username = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['mail'];
  $password = $_POST['password'];
  $rpassword = $_POST['r-password'];

  if (empty($username) || empty($lastname) || empty($email) || empty($password) || empty($rpassword)) {
    header("Location: ../signup.php?error=emptyFields");
    exit();
  }

  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=ivalidEmail_or_uid");
    exit();
  }

  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=ivalidEmail&mail=".$email);
    exit();
  }

  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invalidUsername");
    exit();
  }

  else if ($password !== $rpassword) {
    header("Location: ../signup.php?error=ivalidPassword");
    exit();
  }

  else {
    $sql = "SELECT users_firstname FROM users WHERE users_firstname=?";
    $statement = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($statement, $sql)) { // if the in the stataement
      header("Location: ../signup.php?error=sqlError?372837248b824b");
      exit();
    }

    else {
      // Checking if the username is unique and execute Data
      mysqli_stmt_bind_param($statement, "s",$username);
      mysqli_stmt_execute($statement);
      mysqli_stmt_store_result($statement); // Fetch or get the number of rows
      $result_check = mysqli_stmt_num_rows($statement);
      if ($result_check > 0) {
        header("Location: ../signup.php?error=firstnameTaken".$email);
        exit();
      }

      else {
        $sql = "INSERT INTO users (users_firstname, users_lastname, users_email, users_password) VALUES (?,?,?,?)";
        $statement = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($statement, $sql)) {
          header("Location: ../signup.php?error=sqlError-Inputerr");
          exit();
        }
        else {
          //Password hashing for signup.php
          $hashed_password = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($statement, "ssss",$username,$lastname, $email, $hashed_password);
          mysqli_stmt_execute($statement);
          header("Location: ../signup.php?message=success");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($statement);
  mysqli_close($connection);
}

else {
  header("Location: ../signup.php");
  exit();
}
