<?php
error_reporting(E_ALL);
include_once "dblackivy_connect.php";

class health {


public function inserthealth ($postitle,$postcategory,$postbody,$postphoto){

//selects article by category posts
$stmt = $this->query('SELECT postid,postcategory,postitle,postbody,postphoto FROM postnews WHERE postcategory="health" ORDER BY postid DESC LIMIT 6', MYSQLI_USE_RESULT);
$count4= 0;
while($data=$stmt->fetch_array(MYSQLI_ASSOC)){
	   $dataid[] = $data['postid'];
	   $datacategory[] = $data['postcategory'];
	   $datatitle[] = $data['postitle'];
	   $datacontent[] = $data['postbody'];
	   $dataphoto[] = $data['postphoto'];
	   $count4++;
	}

	}  
	  
	} 
	
 
 




	
?> 



