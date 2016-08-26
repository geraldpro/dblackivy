<?php
error_reporting(E_ALL);
include_once "dblackivy_connect.php";

class create_banner extends connect{

	public $bannername;
	public $bannerphoto;
	public $bannerdate;
	public $errors=array();
	
    public function validateparam($bannername,$bannerphoto,$bannerdate){
		$this->bannername=$bannername;
		$this->bannerphoto=$bannerphoto;
		$this->bannerdate=$bannerdate;
		
		
	if(empty($this->errors)){
		
		$this->insertparameters($bannername,$bannerphoto,$bannerdate);
			
		return true;
		}else {
		return false;}
			
		}
	

public function insertparameters($bannername,$bannerphoto,$bannerdate){
     $this->bannerdate= date("Y-m-d:");
	 $stmt= $this->mysqli->prepare(('INSERT into banner(bannername,bannerphoto,bannerdate) VALUES(?,?,NOW())'));
	 $stmt->bind_param('ss',$bannername,$bannerphoto);
	 
      if($stmt->execute()===TRUE){ header('location:manage-banner-photo-list.php'); 
       exit;
        
		} else{echo "sorry,there was a problem uploading your file.";}
		

	
}
	//return album data
	
public function getparameters(){
	$args = array(
    "bannername"=>$this->bannername,
    "bannerphoto" => $this->bannerphoto,
    "bannerdate" => $this->bannerdate
  
 );
		}
	
//Getters and setters
	public function getbannername(){
		return $this->bannername;
		}
	public function setbannername($bannername){
		$this->bannername=$bannername;
		}
	
	
		
	public function getbannerphoto(){
		return $this->bannerphoto;
		}
	public function setbannerphoto($bannerphoto){
		$this->bannerphoto=$bannerphoto;
		}
		
		
	public function getbannerdate(){
	return $this->bannerdate;
		}
	public function setbannerdate($bannerdate){
	$this->bannerdate = $bannerdate;
		}
		
	}


	
	
	
	
	
	
	
	
	
	



?>






