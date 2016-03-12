<html>
<head>
<title>Test Redis Session Server</title>
</head>
<body>
<?php
  session_start();
  ini_set('display_errors', 1);
  error_reporting(~0);
  require_once("connect.php");
  require_once("indexserver.php");

  if(isset($_SESSION['UserID']))
  {
    echo "Hello " .$_SESSION["username"];
  }

  $sql = "SELECT * FROM users";
  $query = mysqli_query($conn,$sql);

  echo "<br>";
?>
&nbsp &nbsp &nbsp &nbsp &nbsp
<a href="./login.php">Login</a>
<a href="./logout.php">Logout</a>
<br>
<br>
<a href="./products.php">show all product</a>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">Id </div></th>
    <th width="98"> <div align="center">Username </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["id"];?></div></td>
    <td><?php echo $result["username"];?></td>
  </tr>
<?php
}
?>
</table>
