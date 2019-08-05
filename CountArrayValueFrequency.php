<html>
<title>Learning Array</title>
<body bgcolor="Yellow">
<?php 
$garden = array("Cabbage","Peppers","Turnips","Carrots");
//The count() returns the total number of values 
printf("<b>The total number of values in the array garden is : %d </b></br>",count($garden));
//Counting array values frequency
$arr=array("QQ","WW","QQ","WW","QQ");
$freq=array_count_values($arr);
print_r($freq);
?>
</body>
</html>