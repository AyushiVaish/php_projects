<html>
<body>
<table width="285" border="2" align="center">
<form method="post">
<tr>
<td width="159">Name</td>
<td width="108"><input type="text" name="arr[Name]" /></td>
</tr>
<tr>
<td width="159">Email</td>
<td width="108"><input type="email" name="arr[Email]" /></td>
</tr>
<tr>
<td width="159">Mobile</td>
<td width="108"><input type="number" name="arr[Mobile]" /></td>
</tr>
<tr>
<td width="159">Address</td>
<td width="108"><textarea name="arr[Address]" ></textarea></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type ="submit" value="save" name="save" /> 
</td>
</tr>
</form>
</table>
</body>
</html>
<html>
<body>
<center>
<?php 
if(isset ($_REQUEST['save']))
{
	//get the form value and store in $array
	$array=$_REQUEST['arr'];
	//get the $array index and values store them in $key and $value
	echo "<b> Your details are as follows:</b></br>";
foreach($array as $key => $value)
{

//display the index of associative array and value
echo $key." : ".ucfirst($value)."<br/>" ;//ucfirst convers first letter to capital 
}	
}
?>
</center>
</body></html>