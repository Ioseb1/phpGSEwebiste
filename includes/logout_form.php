<?php
  session_start();
  session_unset(); // deletes are the seassons with user id and info
  session_destroy();
  header("Location: ../login.php");
 ?>
