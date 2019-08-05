<?php 
//Below code is similar to $languages[0]="English",$languages[1]="Hindi"
$languages=array("English","Hindi","French");
//You can also use array() to create an associative array.
/*Below code is similar to 
$languages1["United States"]="English";
$languages1["India"]="Hindi";
$languages1["France"]="French";
*/
$languages1=array ("United States " =>"English", "India" =>"Hindi", "France" =>"French");
echo "<h1> ***First array elements are : *** </h1>";
for ($i=0;$i<3;$i++)
{
	echo "<b>languages[$i]=$languages[$i]</b></br>";
}
echo "<h1> ***Second array elements are : *** </h1>";
foreach($languages1 as $lang)
{
	echo "<b>$lang </b></br>";
}

?>