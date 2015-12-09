<?php
session_start();

$con = mysql_connect('localhost', 'root', '');
if (!$con) {
die('Could not connect: ' . mysql_error());
}

mysql_select_db('logster');

if($_POST)
{
$email= $_POST['email'];

$passwd = $_POST['pass'];


if($email==='')
{
echo "<script> alert('enter email');</script>";
}
if($passwd=='')
{
echo "<script>alert('enter password');</script>";
}

$query = "select * from register where email='$email' AND password='$passwd'";
$run = mysql_query($query) or die(mysql_error());
$data = mysql_fetch_array($run);
$num = mysql_num_rows($run);

if($num == 1){
    $_SESSION['name'] = $data['firstname']."".$data['lastname']; 
    header("Location: Dashboard.php");
}
else{
    
    echo "<script>alert('Do Not Exist');</script>";
}

}

?>
<!DOCTYPE html>
<html>
<head>	
<title>login-form</title>
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

</div>
<div  class="wrap">

<div class="Login">
<div class="Login-head">
<h3>LOGIN</h3>
</div>

<form method="POST" action="">
    
<div class="ticker">
<h4>Email</h4>
<input name="email" type="email" placeholder="eg. example@mail.com" ><span> </span>
<div class="clear"> </div>
</div>
    
<div>
<h4>Password</h4>
<input name="pass" type="password" placeholder="*****" >
<div class="clear"> </div>
</div>
    
<div class="checkbox-grid">
<div class="inline-group green">
<label class="radio"><input type="radio" name="radio-inline"><i> </i>Remember me</label>
<div class="clear"> </div>
</div>
</div>

<div class="submit-button">
<input type="submit" name="login" value="LOGIN" >
</div>

</form>
</div>


</div>
</div>
<!--//End-login-form-->	

</body>
</html>


