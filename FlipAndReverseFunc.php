<html>
<?php 

$states=array("Delhi","Uttar Pradesh","Uttrakhand");
echo("<b>");
echo "<br><u> Original array elemets are :</u></br>";
for($i=0;$i<count($states);$i++)
echo "<br>states[$i]=$states[$i]</br>";
echo "<br><u> array elemets in reverse order are :</u></br>";
print_r(array_reverse($states));
echo "<br><u>  array elemets in reverse order preserving keys are :</u></br>";
print_r(array_reverse($states,1));
echo "<br><u> Flipping array keys and values are :</u></br>";
$flip=array_flip($states);
print_r($flip);
echo"</b>";
?></html>