<?php
error_reporting(E_ALL);

if(isset($_GET['msg'])){
	if(is_numeric($_GET['msg'])){
		$msg = $_GET['msg'];
	}
}
$error_msg = array(0 => '', 1 =>'Invalid Username or Password.',2=>'Account has been created for you,please log in',3=>'Welcome home!');

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','dblackivy');

class connect{
	public $mysqli;
	function __construct(){
		$this->mysqli= new mysqli('localhost','root','','dblackivy')or die('could not connect to database'.$mysqli->error());
	}
	}
	
	
/*	
define('DB_HOST','localhost');
define('DB_USER','dblackiv_ike');
define('DB_PASSWORD','gerald?fg88');
define('DB_NAME','dblackiv_dblackivy');

class connect{
	public $mysqli;
	function __construct(){
		$this->mysqli= new mysqli('localhost','dblackiv_ike','gerald?fg88','dblackiv_dblackivy')or die('could not connect to database'.$mysqli->error());
	}
	}
	
	*/
?>