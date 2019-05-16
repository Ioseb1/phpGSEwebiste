<?php
if (isset($_POST['message-submit'])) {
  require 'dbh1.php';

  $username = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['mail'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  if (empty($username) || empty($lastname) || empty($email) || empty($subject) || empty($message)) {
    header("Location: ../contact.php?error=emptyFields");
    exit();
  }

  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*/$", $username)) {
    header("Location: ../contact.php?error=ivalidEmail_or_uid");
  }

  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../contact.php?error=ivalidEmail");
    exit();
  }

  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../contact.php?error=ivalidUsername");
    exit();
  }

  else {
    $sql = "SELECT user_firstname FROM users WHERE user_firstname=?";
    $statement = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($statement, $sql)) { // if the username is in the stataement
      header("Location: ../contact.php?error=sqlError?372837248b824b");
      exit();
    }
    else {
      // Checking if the username is unique and execute Data
      mysqli_stmt_bind_param($statement, "s",$username);
      mysqli_stmt_execute($statement);
      mysqli_stmt_store_result($statement); // Fetch or get the number of rows
      $result_check = mysqli_stmt_num_rows($statement);
      if ($result_check > 0) {
        header("Location: ../contact.php?error=firstnameTaken".$email);
        exit();
      }
      else {
        $sql = "INSERT INTO users (user_firstname, user_lastname, user_email, user_subj, user_message) VALUES (?,?,?,?,?)";
        $statement = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($statement, $sql)) {
          header("Location: ../contact.php?error=sqlError-Inputerr");
          exit();
        }
        else {
          //Password hashing for signup.php
          //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($statement, "sssss",$username,$lastname, $email, $subject, $message);
          mysqli_stmt_execute($statement);
          echo '<h2>The message has been sent!</h2>';
          header("Location: ../contact.php?message=sucess");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($statement);
  mysqli_close($connection);
}

else {
  header("Location: ../contact.php");
  exit();
}
