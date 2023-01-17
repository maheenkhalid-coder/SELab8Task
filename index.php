<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
</style>
<link href="style.cc" rel="stylesheet" type="text/css" />
<link href="style1.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #306;
}
</style>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
</head>
<body>
<div class="form">
<h3>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p onmouseover="MM_validateForm('uname','','R','password','','R');return document.MM_returnValue"><strong>LOGIN FORM</strong></p>
<p>&nbsp;</p>
<h3>
</h3>
<form action="submit.php" method="post">
    <p>
      <label for="fname">Username</label>
      <input type="text" id="uname" name="username" placeholder="Enter Username" />
    </p>
    <p>
      
      <label for="lname">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter Password"/>
    </p>
    <p>
      <input type="submit" value="Submit" />
      
    </p>
    
  </form>
</div>
</body>
</html>