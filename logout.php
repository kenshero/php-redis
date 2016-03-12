<?php
  session_start();

  $serverName = "52.77.236.89";
  $userName = "kenshero";
  $userPassword = "password";
  $dbName = "member";
  $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

  session_destroy();
  header("location:index.php");
?>