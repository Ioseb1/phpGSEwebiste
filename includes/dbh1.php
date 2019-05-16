<?php
# The file name means database heandler which connects the website to the database

$server_name = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "contact_us";

$connection = mysqli_connect($server_name, $dbUsername, $dbPassword, $dbName);

if (!$connection) {
  die("Connection failed: ".mysqli_connect_error());
}
