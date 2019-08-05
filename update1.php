<html>
<body>
<form method="post" action="update.php">
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

$sql="Select id from employee";
$result=$conn->query($sql);
echo "select any one employee id <select name='myselect'>";
while($row = $result -> fetch_array()) {
echo "<option value=$row[0]>$row[0]</a>
</option>";
}
echo "</select>";
 ?>
 <input type = "submit" value="Display Data">
</form>
</body>
</html>