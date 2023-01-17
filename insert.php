<?php
if(!empty($_POST))
{
	$uname      = $_POST['username'];
	$pwd        = $_POST['password'];


	$db_user    = 'root';
	$db_pass    = "";
	$db         = 'test';//test

	$con = mysqli_connect('localhost',$db_user,$db_pass) or die('Unable to connect database');

	mysqli_select_db($con,$db)or die("cannot connect database practice");	
	$sql="insert into lab10(uname,pwd) values('".$uname."','".$pwd."')";

	$result=mysqli_query($con, $sql);

	if($result)
	{
		 echo "You have successfully created new account";
	}
	else{
		 echo "Operation Failure please re-attempt";
	}

		
}
?>  
<form id="insert_form" name="insert_form" method="post" action="">
  <table width="285" border="1">
    <tr>
      <th colspan="3" scope="col"><em><strong>Insert User Record</strong></em></th>
    </tr>
    <tr>
      <td width="78"><em><strong>Username</strong></em></td>
      <td width="144"><em><strong>
      <input type="text" name="username" id="uname" />
      </strong></em></td>
      <td width="22">&nbsp;</td>
    </tr>
    <tr>
      <td><em><strong>Password</strong></em></td>
      <td><em><strong>
      <input type="password" name="password" id="pswd" />
      </strong></em></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><em><strong></strong></em></td>
      <td><input type="submit" name="submit" id="submit" value="Submit"  /></td>
      
     
    </tr>
  </table>
</form>


