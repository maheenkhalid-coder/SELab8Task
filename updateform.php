<?php
   
$db_user    = 'root';
$db_pass    = "";
$db         = 'tests';//test	

$conn = mysqli_connect('localhost',$db_user,$db_pass) or die('Unable to connect database');

mysqli_select_db($conn,$db)or die("cannot connect database practice");

   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT id,uname, pwd FROM lab10';
   $retval = mysqli_query( $conn, $sql);
   if(! $retval ) 
      die('Could not get data: ' . mysql_error());{
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Username</th>"; 
        echo "<th>Password</th>"; 
        echo "<th>Action</th>"; 
         echo "</tr>"; 
   while($row = mysqli_fetch_array($retval, MYSQL_NUM)) {
     	echo "<tr>"; 
                echo "<td>" . $row[1] . "</td>"; 
                echo "<td>" . $row[2] . "</td>"; 
				echo "<td><a href='update.php?id=" . $row[0] . "'>Edit</a></td>"; 
                
            echo "</tr>"; 
			}
		echo "</table>"; 
	  
	  }
       if(!empty($_POST))
{  
	$newpwd1 = $_POST['pswd'];
	$id		 = $_POST['id'];
	$sql="UPDATE lab10 SET pwd = '".$newpwd1."' where Id = $id ";
	$result=mysqli_query($conn, $sql);

	if($result)
	{
		echo "You have successfully changed your password";
	}else{
		echo "Operation Failure please re-attempt";
	}
}
$id = $_GET['id'];
 if(isset($id) && $id != '')
{  
	   //$newpwd1 
	$sql="SELECT id,uname,pwd FROM lab10 WHERE id = $id";
	$result=mysqli_query($conn, $sql);

	if($result)
	{
		$row = mysqli_fetch_array($result, MYSQL_NUM);
	}
}
?>  
<form id="update_form" name="update_form" method="post" action="">
  <table width="285" border="1">
    <tr>
      <th colspan="3" scope="col"><em><strong>Update User Password</strong></em></th>
    </tr>
    <tr>
      <td width="78"><em><strong>Username</strong></em></td>
      <td width="144"><em><strong>
       <input type="text" name="uname" id="uname" disabled="disabled" value="<?php echo $row[1];?>" />
	    <input type="hidden" name="id" id="id"  value="<?php echo $row[0]; ?>" />
      </strong></em></td>
      <td width="22">&nbsp;</td>
    </tr>
    <tr>
      <td><em><strong>Password</strong></em></td>
      <td><em><strong>
      <input type="password" name="pswd" id="pswd" />
      </strong></em></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><em><strong></strong></em></td>
      <td><input type="submit" name="submit" id="submit" value="update"  /></td>
         
    </tr>
  </table>
</form>
