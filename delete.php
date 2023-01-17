<?php

session_start();

$uname = $_SESSION['usern'] ;
$db_user    = 'root';
$db_pass    = "";
$db         = 'tests';//test

$conn = mysqli_connect('localhost',$db_user,$db_pass) or die('Unable to connect database');

mysqli_select_db($conn,$db)or die("cannot connect database practice");

   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
  $sql="Delete from lab10 where uname = '".$uname."' ";
$result=mysqli_query($conn,$sql);

if($result)

    echo "You have successfully deleted your account";

else

    echo "Operation Failure please re-attempt";

?>

