<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="employee";
$id=$_POST['id'];
$name=$_POST['name'];
$emailid=$_POST['emailid'];
//Create Connection
$conn= new mysqli($servername,$username,$password,$dbname);
//Check connection
if($conn->connect_error) {
	die("connection failed:" .$conn -> connect_error);
}
$sql="Insert into employee(id,name,emailid)
VALUES('$id' ,'$name','$emailid')";
if($conn->query($sql) ==TRUE) {
	echo "New Record created successfully";
}
else {
	
	echo "Error : " .$sql ."<br>" .$conn->error;
}
$conn->close();

?>