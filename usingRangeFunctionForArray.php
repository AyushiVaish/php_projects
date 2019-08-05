<?php 
//use range function to create an array consisting of all 
$die=range(1,6);
echo "<h1> ***elements of die array are : *** </h1>";
foreach ($die as $d)
{
	echo"<b>$d</b></br>";
}
//using range function to create an array consisting of all
$even=range(0,20,2);
echo "<h1> ***elements of even array are : *** </h1>";
foreach($even as $e)
{
	echo "<b>$e</b></br>";
}
$letter =range ("A","F");
echo "<h1> ***elements of letters array are : *** </h1>";
foreach($letter as $l)
{
	echo "<b>$l</b></br>";
}
$letter2 =range("A","f");
echo "<h1> ***elements of letter2 array are : *** </h1>";
foreach($letter2 as $l2)
{
	echo "<b>$l2</b></br>";
}
?>