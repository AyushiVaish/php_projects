<html>
<head><title>Search Data</title><head>
<body>
<table align="center" bgcolor="yellow">
<tr><td align="center"><h1>Employees Data</h1></td></tr>
<tr><td><table border="1" align="center" bgcolor="white">
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
$sql="Select * from employee";
$result=$conn->query($sql);
$s="Not Found";
 if($result->num_rows>0)
 {
	 //output name of each row
	 while($row = $result->fetch_array()){
		 echo ("<tr><td><b>$row[0]</b></td><td><b>$row[1]</b></td><td><b>$row[2]</b></td></tr>");
	 }
 }
 else 
 echo ("<tr><td><b>$s</b></td><td><b>$s</b></td><td><b>$s</b></td></tr>");
?>

</table>
</td>
</tr>
</table>
</body>
</html>