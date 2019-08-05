<?php 
//Example of local variables
print("<b>Example of local variables </b> </br>");
$x=10;
function assignx()
{
$x=0;
printf("\$x inside function is %d <br />",$x);
}
assignx();
printf("\$x outside function is %d <br />",$x);
?>