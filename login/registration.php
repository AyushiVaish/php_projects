<html>
<head lang="eng">
<body>
<form method="post" action="registration.php">
User name: <input type="text" placeholder="name" name="name" autofocus>
Password: <input type="password" placeholder="pass" name="pass" value="">
Email Id: <input type="email" placeholder="Email" name="email" autofocus>
<input type="submit" value="register" name="register">
</form>
<center><b>Already register ?</b><br><a href="login.php">Login Here</center>
</body>
</html>
<?php
include("dbConnection.php");
if(isset($_POST['register']))
{
	
	$user_name=$_POST['name'];
	$user_pass=$_POST['pass'];
	$user_email=$_POST['email'];

if($user_name=='')
{
	//javascript use for input checking
	echo "<script>alert('Please enter your name')</script>";
	exit();
}
if($user_pass=='')
{
	//javascript use for input checking
	echo "<script>alert('Please enter your password')</script>";
	exit();
}
if($user_email=='')
{
	//javascript use for input checking
	echo "<script>alert('Please enter your email')</script>";
	exit();
}
//here query check whether if user already registered so can't register again
$check_email_query="select * from registration WHERE email='user_email'";
$run_query=mysqli_query($dbcon,$check_email_query);
if(mysqli_num_rows($run_query)>0)
{
	echo "<script>alert('Email $user_email is already existing in our database,Please try new one')</script>";
	exit();
}
//insert the user into the database
$insert_user="insert into registration(name,pass,email) VALUES('$user_name','$user_pass','$user_email')";
if(mysqli_query($dbcon,$insert_user))
{
	echo "<script>window.open('welcome.php','_self')</script>";
	//echo"Welcome";
}
} 
?>