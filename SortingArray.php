<?php
$grades=array(42,23,54,64,12,34);
sort($grades);
echo"<b>";
echo"<br><u>Sorting array elements from lowest to highest.</u></br>";
print_r($grades);

echo"<br><u>Sorting array elements from alphabetically.</u></br>";
$states=array("UP" =>"Uttar Pardesh","DE" => "Delhi", "Uk" => "Uttrakhand");
sort($states);
print_r($states);

$states1=array("UP" =>"Uttar Pardesh","DE" => "Delhi", "Uk" => "Uttrakhand");
echo"<br><u>Sorting array elements while maintaining key/value pairs.</u></br>"; 
 asort($states1);
 print_r($states1);

 $states2=array("UP" =>"Uttar Pardesh","DE" => "Delhi", "Uk" => "Uttrakhand");
echo"<br><u>Sorting array elements  in reverse order without maintaining key/value pairs.</u></br>"; 
 asort($states2);
 print_r($states2);

 $states3=array("UP" =>"Uttar Pardesh","DE" => "Delhi", "Uk" => "Uttrakhand");
echo"<br><u>Sorting array elements  in reverse order with maintaining key/value pairs.</u></br>"; 
 asort($states3);
 print_r($states3);
 ?>