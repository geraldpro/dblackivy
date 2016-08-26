<?php
error_reporting(E_ALL);
include_once "dblackivy_connect.php";

class create_advert extends connect{

	public $advertname;
	public $advertphoto;
	public $advertdate;
	public $errors=array();
	
    public function validateparam($advertname,$advertphoto,$advertdate){
		$this->advertname=$advertname;
		$this->advertphoto=$advertphoto;
		$this->advertdate=$advertdate;
		
		
	if(empty($this->errors)){
		
		$this->insertparameters($advertname,$advertphoto,$advertdate);
			
		return true;
		}else {
		return false;}
			
		}
	

public function insertparameters($advertname,$advertphoto,$advertdate){
     $this->advertdate= date("Y-m-d:");
	 $stmt= $this->mysqli->prepare(('INSERT into advert(advertname,advertphoto,advertdate) VALUES(?,?,NOW())'));
	 $stmt->bind_param('ss',$advertname,$advertphoto);
	 
      if($stmt->execute()===TRUE){ header('location:manage-advert-photo-list.php'); 
       exit;
        
		} else{echo "sorry,there was a problem uploading your file.";}
        
		

	
}
	//return album data
	
public function getparameters(){
	$args = array(
    "advertname"=>$this->advertname,
    "advertphoto" => $this->advertphoto,
    "advertdate" => $this->advertdate
  
 );
		}
	
//Getters and setters
	public function getadvertname(){
		return $this->advertname;
		}
	public function setadvertname($advertname){
		$this->advertname=$advertname;
		}
	
	
		
	public function getadvertphoto(){
		return $this->advertphoto;
		}
	public function setadvertphoto($advertphoto){
		$this->advertphoto=$advertphoto;
		}
		
		
	public function getadvertdate(){
	return $this->advertdate;
		}
	public function setadvertdate($advertdate){
	$this->advertdate = $advertdate;
		}
		
	}


	
	
	
	
	
	
	
	
	
	



?>






