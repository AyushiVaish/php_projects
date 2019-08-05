<?php
if(isset($_POST["submit"])){
	$check=getimagesize($_FILES["image"]["tmp_name"]);
	if($check !==false){
		$image=$_FILES['image']['tmp_name'];
		$imgContent = addslashes(file_get_contents($image));
		/*
		Insert image data into database
		*/
		//DB details
		$dbHost='localhost';
		$dbUsername='root';
		$dbPassword ='';
		$dbName='imagetable1';
		//Create connection and select db
		$db=new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
		//check connection
		if($db->connect_error){
			die("Connection failed : ". $db->connect_error);
		}
		$dateTime= date ("Y-m-d H:i:s");
		//insert image content to database
		$insert=$db->query("INSERT into img(image,created) VALUES('$imgContent','$dateTime')");
		if($insert){
			echo "File uploaded successfully";
			
		}
		else {
			echo "File upload failed,please try again";
		}
		
	}
	
}
 ?> 