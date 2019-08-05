<html>
<head><title>Search Data </title></head>
<body>
<table align="center" bgcolor="yellow">
<tr>
<td align="center"><h1>Employees Data </h1></td>
</tr>
<tr>
<td>
<table border="1" align="center" bgcolor="green">
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

$id=$_POST["id"];
$sql="Select * from employee where id=$id";
$result=$conn->query($sql);
$s="Not Found";
 if($result->num_rows>0)
 {
	 //output data of each row
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
