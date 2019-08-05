<?php 
//Example of Global variable
print("<b>Example of global variable </b> </br>");
$somevar=15;
function addit()
{
global $somevar;
$somevar++;
echo "Somevar is $somevar </br>";

}
addit();
//Example of alternative method to declare global variable
print("Example of global variable through php");
$somevar=15;
function addit2() {
$GLOBALS["somevar"]++;
}
addit2();
echo "Somevar is ".$GLOBALS["somevar"];
?>