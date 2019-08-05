<?php
//example of static  variable
print("<b>Example of static variable </b> </br>");
function keep_track()
{
static $count=0;
$count++;
echo $count;
echo "<br />";

}
keep_track();
keep_track();
keep_track();
print("<b>Example of non static variable </b> </br>");
function keep_track2()
{
$count2=0;
$count2++;
echo $count2;
echo "<br />";

}
keep_track2();
keep_track2();
keep_track2();

?>