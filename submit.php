<?php
session_start();
$uname      = $_POST['username'];
$pwd        = $_POST['password'];
$_SESSION['usern'] = $uname;
$db_user    = 'root';
$db_pass    = "";
$db         = 'tests';//test

$con = mysqli_connect('localhost',$db_user,$db_pass) or die('Unable to connect database');
mysqli_select_db($con,$db) or die('cannot');
$sql= "SELECT * from lab10 where uname = '$uname' AND pwd = '$pwd'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0 )
 {
     $result = mysqli_query($con,$sql);
     $row=mysqli_fetch_array($result);
     {
         header('location: menu.php');
     }
  }
else {
     header ('location: exit.php');
 }
 mysqli_close();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

</body>
</html>