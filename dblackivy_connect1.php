<?php
error_reporting(E_ALL);

if(isset($_GET['msg'])){
	if(is_numeric($_GET['msg'])){
		$msg = $_GET['msg'];
	}
}
$error_msg = array(0 => '', 
1 =>'Please complete all of the required fields', 
2=>'Old password do not match that in the database',
3=>'New passwords do not match each other');

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
?>