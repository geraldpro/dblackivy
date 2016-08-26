<?php
error_reporting(E_ALL);
include_once "dblackivy_connect.php";

class modeldata extends connect{

	private $fname;
	private $mname;
	private $lname;
	private $address;
	private $phone;
	private $modelphoto;
    public  $errors;
	
	public function validateparam($fname,$lname,$mname,$address,$phone,$modelphoto){
		$this->fname=$fname;
		$this->mname=$mname;
		$this->lname=$lname;
		$this->address=$address;
        $this->phone=$phone;
	    $this->modelphoto=$modelphoto;
	
	if(empty($this->errors)){
		
		$this->insertmodel($fname,$lname,$mname,$address,$phone,$modelphoto);
			
		return true;
		}else {
		return false;}
			
		}
		
	public function insertmodel($fname,$lname,$mname,$address,$phone,$modelphoto){
    $stmt = $this->mysqli->prepare('INSERT into model(fname,lname,mname,address,phone,modelphoto) VALUES( ?,?,?,?,?,?)');
	$stmt->bind_param('ssssss',$fname,$lname,$mname,$address,$phone,$modelphoto);
		 if($stmt->execute()===TRUE){header('location:index.php'); 
       exit;
        
		} else{echo "sorry,there was a problem uploading your file.";}
			
		}		
	
	
	public function getcontents(){
		$arg=array(
        "fname"=>$this->fname,
		"mname"=>$this->mname,
		"lname"=>$this->lname,
		"address"=>$this->address,
		"phone"=>$this->phone,
		"modelphoto"=>$this->modelphoto);

		
		
	}
		
	public function getfname(){
		return $this->fname;
		}
	public function setfname(){
	  $this->fname=$fname;
	   }
	   
	
	public function getmname(){
		return $this->mname;
		}
	public function setmname(){
	  $this->mname=$mname;
	   }
	
	
	public function getlname(){
		return $this->lnmae;
		}
	public function setlname(){
	  $this->lname=$lname;
	   }
	   
		
	public function getaddress(){
		return $this->address;
		}
	public function setaddress(){
	  $this->address=$address;
	   }   
	   
		
	public function getphone(){
		return $this->phone;
		}
	public function setphone(){
	  $this->phone=$phone;
	   }   
	   
	 public function getmodelphoto(){
		return $this->modelphoto;
		}
	public function setmodelphoto(){
	  $this->modelphoto=$modelphoto;
	   }       	
		
	
	
	
	
	
	
	}




?>