<?php
session_start();
$con = mysql_connect('localhost', 'root', '');
if (!$con) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db('logster');
echo $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>	
<title>Dashboard</title>
<style> 

    .table table{
        
        alignment-adjust: central;
        border: 5px;
    }

</style>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Lobster|Pacifico:400,700,300|Roboto:400,100,100italic,300,300italic,400italic,500italic,500'  rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,300' rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>
<body>	
    <h1>Welcome User</h1>
    <div class ="table">
    <table>
        <th colspan="5">User Information table</th>
        
        
        
        <tr><td>First name</td><td>dfgdehdt</td></tr>
        <tr><td>Last name</td><td>dfgh</td></tr>
        <tr><td>Email</td><td>dfghdr</td></tr>
        <tr><td>Contact</td><td>dzfgr</td></tr>
        
        
    </table>
    </div>
</body>
</html>


