<?php 
session_start();
?>
<html>
<head lang="eng" title="Login Page">
<body>
<form method="post" action="login.php">
<fieldset>
<input type="email" placeholder="Email" name="email" autofocus>
<input type="password" placeholder="pass" name="pass" value="">
<input type="submit" value="Login" name="login">
</fieldset>
</form>
</body>
</html>
<?php
include("dbConnection.php");
if(isset($_POST['login']))
{
	
	
	$user_email=$_POST['email'];
	$user_pass=$_POST['pass'];
	
$check_user="select * from registration WHERE email='user_email'";
$run=mysqli_query($dbcon,$check_user);
if(mysqli_num_rows($run))
{
	echo "<script>window.open('welcome.php','_self')</script>";
	$_SESSION['.email']=$user_email; //here session is used and value of email is stored in $_SESSION
}
else{
	echo"<script>alert('Email or password is incorrect')</script>";
}
}
 ?>