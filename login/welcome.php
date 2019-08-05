<?php 
session_start(); // session is a way to store information(in variables) to be used accross multiple pages.
if(!$_SESSION['email'])
{
header("Location :login.php");//use for the redirection to login page
}

?>
<html>
<head><title>Registration</title></head>
<body>
<h1>Welcome</h1>
<br>
<?php 
echo $_SESSION['email'];
?>
<h1><a href="logout.php">LOGOUT HERE</a></h1>
</body>
</html>