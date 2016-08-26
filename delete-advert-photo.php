<?php
error_reporting(E_ALL);
include_once "dblackivy_connect.php";


  $mdb= new connect;
    if(isset($_GET['id'])){
    $id = trim($_GET['id']);
     if(is_numeric($id)){
     $stmt=$mdb->mysqli->prepare("DELETE FROM advert WHERE advertid = $id");
      $stmt->bind_param('d',$advertid);
      if($stmt->execute()===TRUE){
      header("location:manage-advert-photo-list.php");
        exit;
}
}
}

	


?> 



