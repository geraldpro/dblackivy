<?php
error_reporting(E_ALL);
include_once "dblackivy_connect.php";

class newsdata extends connect{

	private $postitle;
	private $postbody;
	private $postdate;
	private $postphoto;
	public  $errors;
	
	public function validateparam($postitle,$postbody,$postphoto,$postdate){
		$this->postitle=$postitle;
		$this->postbody=$postbody;
		$this->postphoto=$postphoto;
		$this->postdate=$postdate;
		
		
	if(empty($postitle)&& empty($postbody)){
		$this->errors ='Please enter post';
		}	
	if(empty($this->errors)){
		
		$this->insertpost($postcategory,$postitle,$postbody,$postphoto,$postdate);
			
		return true;
		}else {
		return false;}
			
		}
		
	public function insertpost($postcategory,$postitle,$postbody,$postphoto,$postdate){

	$this->postdate= date(DATE_RFC2822);
	
   $stmt = $this->mysqli->prepare('INSERT into postnews(postcategory,postitle,postbody,postphoto,postdate) VALUES( ?,?,?,?, NOW())');
   
		$stmt->bind_param('ssss',$postcategory,$postitle,$postbody,$postphoto);
		 if($stmt->execute()===TRUE){if (headers_sent()) {
    die("Redirect failed. Please click on this link: <a href=...>");
}
else{
    exit(header("Location: post-list.php"));
} 
       exit;
        
		} else{echo "sorry,there was a problem uploading your file.";}
			
		}		
	
	
	public function getcontents(){
		$arg=array(
        "postcategory"=>$this->postcategory,
		"postitle"=>$this->postitle,
		"posbody"=>$this->postbody,
		"postphoto"=>$this->postphoto,
		"postdate"=>$this->postdate);
		
		
	}
		
	public function getpostcategory(){
		return $this->postcategory;
		}
	public function setpostcategory(){
	  $this->postcategory=$postcategory;
	   }
	   
	
	public function getpostitle(){
		return $this->postitle;
		}
	public function setpostitle(){
	  $this->postitle=$postitle;
	   }
	
	
	public function getpostbody(){
		return $this->postbody;
		}
	public function postbody(){
	  $this->postbody=$postbody;
	   }
	   
		
	public function getpostphoto(){
		return $this->photo;
		}
	public function setpostphoto(){
	  $this->postphoto=$postphoto;
	   }   
	   
		
	public function getpostdate(){
		return $this->postdate;
		}
	public function setpostdate(){
	  $this->postdate=$postdate;
	   }   
	   
	     	
		
	
	
	
	
	
	
	}




?>