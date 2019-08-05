<?php 
session_start();
?> 
<html>
<head>
<title>Greetings</title>
</head>
<body>
<h2>Welcome to the center for Content-free Hospitality</h2>
<?php
if(!isSet($_SESSION['visit_count'])) 
{
	echo"Welcome"."<br>";
	$_SESSION['visit_count']=1;
}
else {
$visit_count=$_SESSION['visit_count']+1;
echo"Back again are ya? That makes $visit_count times now"."(not that anyone's counting)<br>";
$_SESSION['visit_count']=$visit_count;
}
	$self_url=$_SERVER['PHP_SELF'];
	$session_id=SID;
	if(isset($session_id)&& $session_id) {
		$href="%self_url?$session_id";
	}
	else{
		$href=$self_url;
		
	}
	echo "<br><a href=\"$href\">Visit us again </a>sometime";
 ?>
</body>
</html>