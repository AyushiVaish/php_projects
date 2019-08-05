<?php 
$state[0]="Delhi";
$state[1]="Uttar Pradesh";
$state[2]="Uttrakhand";
echo "<h1>***First array elements are : ***</h1>";
echo "<b>$state[0]</br>";
echo "$state[1]</br>";
echo "$state[2] </br>";
echo "<h1>***First array elements through loop : ***</h1>";
for($i=0;$i<3;$i++)
{
	echo "<b>state[$i]=$state[$i]</b></br>";
	
}
echo "<h1>***First array elements through foreach loop: ***</h1>";
foreach ($state as $st)
{
	echo "<b>$st</b></br>";
}
//if one wanats array index value to be numerical and ascending 

$state1[]="Delhi";
$state1[]="Uttar Pradesh";
$state1[]="Uttrakhand";
echo "<h1>***Second array elements are : ***</h1>";
echo "<b>$state1[0]</br>";
echo "$state1[1]</br>";
echo "$state1[2] </br>";
//one can create associative arrays but the key is always 
$state2["Delhi"]="August 21,1979";
$state2["Uttar Pradesh"]="August 21,1980";
$state2["Uttrakhand"]="August 21,1981";
echo "<h1>***Third array elements are : ***</h1>";
foreach($state2 as $st2)
{
	echo"<b>$st2</b></br>";
}
?>