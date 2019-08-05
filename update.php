<html>
<head>
<title>Search data</title>
</head>
<body>
<form method="post" action="update2.php">
<table align="center" bgcolor="yellow">
<tr>
<td align="center"><h1>Employees Data</h1></td>
</tr>
<td>
<table border="2" align="center" bgcolor="green">
<tr>
<td><h2>ID</h2></td>
<td><h2>NAME</h2></td>
<td><h2>EMAIL ID</h2></td>
</tr>
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="employee";
//create connection
$conn= new mysqli ($servername,$username,$password,$dbname);
//Check connection
if($conn->connect_error) {
	die("connection failed :".$conn -> connect_error);
}
$id=$_POST["myselect"];
$sql="Select * from employee where id=$id";
$result=$conn->query($sql);
$s="Not Found";
 if($result->num_rows>0)
 {
	 //output data of each row
	 while($row = $result->fetch_array()){
		echo("<tr><td><b><input type ='text' value='$row[0]' name='id' readonly></b></td><td><b><input type ='text' value='$row[1]' name='name'></b></td>
		<td><b><input type ='text' value='$row[2]' name='emailid' ></b></td></tr>
		<tr><td><input type='submit' value='update'></td></tr>");
	
	 }
 }
	 else 
		echo ("<tr><td><b>$s</b></td><td><b>$s</b></td><td><b>$s</b></td></tr>");
 ?>
 </form>
</table>
</body>
</html>