<?php 
//Example of function parameters
print("<b> Example of function parameters </b> </br>");
function x10 ($value)
{
$value = $value *10;
return $value;
} 
$v=x10(10);
printf("The value returned by the function x10 is %d </br>",$v);

?>