<html>
<?php 
if (isset ($_POST['submit']))
{
	echo"You like the following languages :</br>";
	foreach($_POST['languages'] as $language) echo "$language <br />";
}
?> 
<form action="" method="post">
Check all the language you like:<br>
<input type ="checkbox" name="languages[]" value="JAVA"/>JAVA<br/>
<input type ="checkbox" name="languages[]" value="C#.NET"/>C#.NET<br/>
<input type ="checkbox" name="languages[]" value="PHP"/>PHP<br/>
<input type ="checkbox" name="languages[]" value="PYTHON"/>PYTHON<br/>
<input type ="SUBMIT" NAME="submit" VALUE="GO !" />
</form>

</html>