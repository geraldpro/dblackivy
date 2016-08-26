<?php
error_reporting(E_ALL);
include_once "dblackivy_connect.php";

class create_magazine extends connect{

	private $magname;
	private $magphoto;
	private $magdate;
	public $errors=array();
	
    public function validateparam($magname,$magphoto,$magdate){
		$this->magname=$magname;
		$this->magphoto=$magphoto;
		$this->magdate=$magdate;
		
		
	if(empty($this->errors)){
		
		$this->insertparameters($magname,$magphoto,$magdate);
			
		return true;
		}else {
		return false;}
			
		}
	

public function insertparameters($magname,$magphoto,$magdate){
     $this->magdate= date("Y-m-d:");
	 $stmt= $this->mysqli->prepare(('INSERT INTO magazine(magname,magphoto,magdate)VALUES(?,?,NOW())'));
	 $stmt->bind_param('ss',$magname,$magphoto);
	 if($stmt->execute()===TRUE){header('location:manage-mag-photo-list.php'); 
       exit;
      } else{echo "sorry,there was a problem uploading your file.";}
        
}
	//return album data
	
public function getparameters(){
	$args = array(
    "magname"=>$this->magname,
    "magphoto" => $this->magphoto,
    "magdate" => $this->magdate
  
 );
		}
	
//Getters and setters
	public function getmagname(){
		return $this->magname;
		}
	public function setmagname($magname){
		$this->magname=$magname;
		}
	
	public function getmagphoto(){
		return $this->magphoto;
		}
	public function setmagphoto($magphoto){
		$this->magphoto=$magphoto;
		}
		
		
	public function getmagdate(){
	return $this->magdate;
		}
	public function setmagdate($magdate){
	$this->magdate = $magdate;
		}
		
	}
?>






