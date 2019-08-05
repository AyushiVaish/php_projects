<html>
<title>Learning Arrays</title>
<body bgcolor="orange">
<font size="15">
<?php 
$birthday["Aman"]="September 5,1998";
$birthday["Ayushi"]="May 6,1998";
$birthday["Dimple"]="January 21,1999";
//Searching Associative Arrays Keys
if(array_key_exists("Ayushi",$birthday))
printf("<b>Ayushi was born on %s </b></br>",$birthday["Ayushi"]);
//Searching Associative array Values
$bd=array_search("December 21,1999",$birthday);
if($bd)
printf("<b>%s was born on %s.</b></br>",$bd,$birhday["$bd"]);
else
printf("<b>%s birthdate is not found</b></br>",$bd);


//Retrieving Array Keys
$keys=array_keys($birthday);
printf("<b>");
print_r($keys);
 //printing array for testing purpose
printf("</b>");
//Retrieving Array Values
$values=array_values($birthday);

printf("<b><br>");
print_r($values);
printf("</b></br>");

?>
</font>
</body>

</html>