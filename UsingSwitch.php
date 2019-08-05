<html>
<title>Learning php Switch</title>
<body>
<?php 
$name=$_POST['name'];
$age=$_POST['age'];
switch($name)
{
case "Ayushi":
echo "<b> Your name is Ayushi </b></br>";
break;
case "Aman":
echo "<b> Your name is Aman </b></br>";
break;
case "Piyush":
echo "<b> Your name is Piyush </b></br>";
break;
default:
echo"<b>Invalid name </b></br>";
}
switch($age)
{
	case 30:
	echo "<b>Your age is 30 </b></br>";
	break;
	case 40:
	echo "<b>Your age is 40</b></br>";
	break;
	case 50:
	echo "<b>Your age is 50</b></br>";
	break;
	default:
	echo "<b>Invalid age</b></br>";
}

?>

</body>
</html>