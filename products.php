<html>
<head>
<title>Test Redis Session Server</title>
</head>
<body>
<?php
  session_start();
  ini_set('display_errors', 1);
  error_reporting(~0);
  $serverName = "52.77.236.89";
  $userName = "kenshero";
  $userPassword = "password";
  $dbName = "member";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

  if(!isset($_SESSION['UserID']))
  {
    echo "Please Login!";
    exit();
  }

   $sql = "SELECT * FROM products";
   $query = mysqli_query($conn,$sql);
   echo "Server 2";
?>
<h1>Products</h1>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">Id </div></th>
    <th width="98"> <div align="center">product_name </div></th>
    <th width="98"> <div align="center">price </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["id"];?></div></td>
    <td><?php echo $result["product_name"];?></td>
    <td><?php echo $result["price"];?></td>
  </tr>
<?php
}
?>
</table>
