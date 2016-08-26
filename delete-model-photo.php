<?php
error_reporting(E_ALL);
include_once "dblackivy_connect.php";


  $mdb= new connect;
    if(isset($_GET['id'])){
    $id = trim($_GET['id']);
     if(is_numeric($id)){
     $stmt=$mdb->mysqli->prepare("DELETE FROM model WHERE modelid = $id");
      $stmt->bind_param('d',$modelid);
      if($stmt->execute()===TRUE){
      header("location:manage-model-photo-list.php");
        exit;
}
}
}

	


?> 



