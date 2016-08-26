<?php
error_reporting(E_ALL);
include_once "dblackivy_connect.php";


  $mdb= new connect;
    if(isset($_GET['id'])){
    $id = trim($_GET['id']);
     if(is_numeric($id)){
     $stmt=$mdb->mysqli->prepare("DELETE FROM postnews WHERE postid = $id");
      $stmt->bind_param('d',$postid);
      if($stmt->execute()===TRUE){
      header("location:post-list.php");
        exit;
}
}
}

	


?> 



