<?php
  session_start();

  ini_set('display_errors', 1);
  error_reporting(~0);

  require_once("connect.php");


  $strUsername = mysqli_real_escape_string($conn,$_POST['txtUsername']);
  $strPassword = mysqli_real_escape_string($conn,$_POST['txtPassword']);

  $strSQL = "SELECT * FROM users WHERE username = '".$strUsername."' 
  and password = '".$strPassword."'";
  $objQuery = mysqli_query($conn,$strSQL);
  $objResult = mysqli_fetch_array($objQuery);
  if(!$objResult)
  {
    echo "Username and Password Incorrect!";
    exit();
  }
  else
  {
      //*** Session
      $_SESSION["UserID"]   = $objResult["id"];
      $_SESSION["username"] = $objResult["username"];
      session_write_close();

      //*** Go to Main page
      header("location:index.php");

      
  }
  mysqli_close($conn);
?>