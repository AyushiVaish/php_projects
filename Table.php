<html>
<title>The table is shown</title>
<body>
<style="font-family:arial; color:red; font-size:20px;">
<?php 

$number=$_POST['number'];
if(filter_var($number,FILTER_VALIDATE_INT)==false)
{
	echo"<center><b>Invalid Integer,Kindly enter correct integers only</b></center>";
}
else {
	printf("<center><b>The table of %d is as follows :<b></center>");
	for($i=1;$i<101;$i++)
	printf("<center><b> %d * %d =%d</b></center></br>",$number,$i,($number*$i));
}


?>


</body>


</html>