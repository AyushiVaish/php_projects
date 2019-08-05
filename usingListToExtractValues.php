<html>
<title>Using list()</title>
<body bgcolor="Yellow">
<?php
$arr=array("Ayushi","Ayu","Aman");
echo "<h1>***Array Elements through list ****</h1></br>";
list($name,$name1,$name2)=$arr;
echo"<b>$name</b></br>";
echo"<b>$name1</b></br>";
echo"<b>$name2</b></br>";
//Ading value to the front of an array :
echo "<h1>***Ading value to the front of an array : ****</h1></br>";
array_unshift($arr,"Piyush","Ayush");
foreach($arr as $a)
{
	echo"<b>$a</b></br>";
}
//Ading value to the end of an array :
echo "<h1>***Ading value to the end of an array : ****</h1></br>";
array_push($arr,"Alek","Dimple");
foreach($arr as $a)
{
	echo"<b>$a</b></br>";
}
//Removing value from the front of an array:
echo "<h1>****Removing value from the front of an array:****</h1>";
array_shift($arr);
foreach($arr as $a)
{
	echo"<b>$a</b></br>";
}
//Removing value from the end of an array:
echo "<h1>****Removing value from the end of anarray:****</h1>";
array_pop($arr);
foreach($arr as $a)
{
	echo"<b>$a</b></br>";
}
 ?>
</body>

</html>