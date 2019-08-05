<?php
if(!empty($_GET['id'])){
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
		//get image data from database
		$result=$db->query("SELECT image FROM img WHERE id={$_GET['id']}");
		if($result->num_rows >0){
			$imgData=$result ->fetch_assoc();
			//Render image
			header("Content-type: image/jpg");
			echo $imgData['image'];
			echo '<img src="data:image/jpg;base64,'.base64_encode($imgData['image']).'"/>';
			}
else{
	echo 'Image not found...';
}	
}
 ?>