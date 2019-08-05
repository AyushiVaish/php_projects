<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="employee";
$name=$_POST['name'];
$emailid=$_POST['emailid'];
//create connection
$conn= new mysqli ($servername,$username,$password,$dbname);
//Check connection
if($conn->connect_error) {
	die("connection failed :".$conn -> connect_error);
}
$sql="update employee set name='$name', emailid='$emailid'";
if($conn->query($sql) ==TRUE) {
echo"record updated successfully";

} 
else {
	echo "Error: ".$sql ."<br>".$conn->error;
}
$conn->close();
?>