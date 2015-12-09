
<?php
$con = mysql_connect('localhost', 'root', '');
if (!$con) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db('logster');


if($_POST)
{
$fn = $_POST['fname'];
$ln = $_POST['lname'];
$ml = $_POST['email'];
$cnt = $_POST['cont']; 
$pass = $_POST['passwd']; 


if($fn=='')
{
echo "<script> alert('Please Enter your first name!')</script>";
exit();
}

else if($ln=='')
{
echo "<script> alert('Please Enter your last name!')</script>";
exit();
}

else if($ml=='')
{
echo "<script> alert('Please Enter your email!')</script>";
exit();
}

else if($cnt=='')
{
echo "<script> alert(' Your valid phone number please!')</script>";
exit();
}
else if($pass=='')
{
echo "<script> alert(' Password Required!')</script>";
exit();
}


else
{
$que = "insert into register(firstname,lastname,email,contact,password) values('$fn','$ln','$ml','$cnt','$pass')"; 
if(mysql_query($que))
{
echo "<script>alert('Registration Successfull!!')</script>";
echo "<script>window.open('login.php','_self')</script>";
}
else{
die(mysql_error());
}
}
}
?>

<!DOCTYPE html>
<html>
<head>	
<title>Register-form</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Lobster|Pacifico:400,700,300|Roboto:400,100,100italic,300,300italic,400italic,500italic,500'  rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,300' rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>
<body>	
<!--start-login-form-->
<div class="main">
<div class="login-head">
<h1></h1>
</div>
<div  class="wrap">
<div class="Regisration">
<div class="Regisration-head">
<h2><span></span>Register</h2>
</div>
<form method="POST" action="">
<input type="text" name="fname" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" >
<input type="text" name="lname" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}" >
<input type="email" name="email" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" >
<input type="tel" name="cont" value="Contact" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contact';}" >
<input type="password" name="passwd" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" >

<div class="Remember-me">
<div class="p-container">
<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>I agree to the Terms and Conditions</label>
<div class ="clear"></div>
</div>

<div class="submit">
<input type="submit" name="submit" onclick="myFunction()" value="Sign Me Up >" >
</div>
<div class="clear"> </div>
</div>

</form>
</div>

<!--//End-login-form-->	
<div class ="copy-right">

</div>
</div>
</div>
</body>
</html>


