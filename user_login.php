<?php
error_reporting(E_ALL);
include_once "dblackivy_connect.php";
$mdb=new connect;

//User authetication:
class user extends connect {
	protected $uid;
	public $username;
	protected $password;
    
	public function login_user($uid,$username,$password){
	$this->uid=$uid;	
	$this->username=$username;
	$this->password=$password;

	}
	public function fetchusername(){
		$user=new user;
		$admin = $user->mysqli->prepare('SELECT uid,username FROM admin WHERE username=?');
        $admin->execute();
	    $admin->bind_result($username,$uid);
	    $admin->fetch();
		}
	
	public function setusername(){
		$this->username=$username;
		}	
	
	public function logout_user($uid,$username){
		
		
		}
}
?>