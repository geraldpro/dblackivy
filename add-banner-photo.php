<?php
session_start();
if(empty($_SESSION['username'])){
	header('location:admin.php');
	exit;
	}
include_once "dblackivy_connect.php";
include_once "create-banner.class.php";

$mdb=new connect;
$create = new create_banner;

if(isset($_POST['submit'])){
  $_POST = array_map('stripslashes',$_POST);
   extract ($_POST);
	
	$bannerdate = date("Y-m-d");
        
if(isset($_FILES['imagefiles']['name'])&& !empty($_FILES['imagefiles']['name'])&& !empty($_FILES['imagefiles']['size'])){
	 if( is_uploaded_file($_FILES['imagefiles']['tmp_name'])){

		 $bannerphoto = $_FILES['imagefiles']['name'];
	     $filesize= $_FILES['imagefiles']['size'];
	     $filetype= $_FILES['imagefiles']['type'];
	     $tmp_name= $_FILES['imagefiles']['tmp_name'];
	 
	     $extensions = array('jpeg','jpg','png');
         
		 
         $file_ext = explode('.',$bannerphoto);
         $end = strtolower(end($file_ext));
		 unset($file_ext);

         if(in_array($end,$extensions)==false){
	     $create->errors[]="extension not supported";
	      }
         if ($_FILES['imagefiles']['size']>2097152){
	     $create->errors[]= "file size too large";
	      }

         $img_dir = $_SERVER['DOCUMENT_ROOT']."/dblackivy/banner_images/" ;
        
		if(move_uploaded_file($tmp_name,$img_dir.$_FILES['imagefiles']['name'])){
		  
		  $create->insertparameters($bannername,$bannerphoto,$bannerdate);
		  
		  }
		 
	} 
        
}
	
}
 

	
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Add-banner-photo -- Black Ivy</title>
  <!-- Bootstrap core CSS -->
  <link href="bootstrap-3.3.6/docs/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="bootstrap-3.3.6/docs/examples/dashboard/dashboard.css" rel="stylesheet">
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
  <script src="bootstrap-3.3.6/docs/assets/js/ie-emulation-modes-warning.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  </head>

  <body>

  <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left" id="style">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact-us.php">CONTACT</a></li>
            </ul>
          
          <ul class="nav navbar-nav navbar-right" id="style">
					<li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ADMIN MANAGEMENT<span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li class="dropdown-header"><span class="h5">Account & Settings</span></li>
						<li><a href="edit-profile.php">Change Password</a></li>
						<li><a href="log-out.php">Log Out</a></li>
					  </ul>
					</li>
				</ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    <div class="container-fluid">
		<div class="row">
			<div class="col-xs-4 col-sm-3 col-md-2 sidebar">
			  <ul class="nav nav-sidebar">
				<li class="active"><a>Overview <span class="sr-only">(current)</span></a></li>
				<li><a href="create-news.php">Create New Post</a></li>
				<li><a href="post-list.php">Manage Post List</a></li>
				<li><a href="Add-Model-Photo.php">Add Model Photo </a></li>
				<li><a href="manage-model-photo-list.php">Manage Model Photo List</a></li>
                <li><a href="add-advert-photo.php">Add Advert Photo</a></li>
                <li><a href="manage-advert-photo-list.php">Manage Advert Photo List</a></li>
                <li><a href="add-magazine-photo.php">Add Magazine Photo</a></li>
                <li><a href="manage-mag-photo-list.php">Manage Magazine Photo List</a></li>
                <li><a href="add-banner-photo.php">Add Banner Photo</a></li>
                <li><a href="manage-banner-photo-list.php">Manage Banner Photo List</a></li>

			  </ul>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			  <h1 class="page-header">Add Banner Photo</h1>
               <div class="row">
               <div class="col-md-12">
               <div class="form-group col-md-8">
			<form role="form" action="" method="post" enctype="multipart/form-data"/>
               <label for="Advertname">Banner Title</label>
<input type="text"  name="bannername" value="<?php if(isset($error)){echo $_POST['bannername'];}?>" class="form-control" placeholder="Enter Banner Title">
								</div>
					<div class="form-group col-md-8">
					  <label for="exampleInputFile">Choose Post Photo</label>
						<input type="file" name="imagefiles" class="btn btn-sm btn-success" id="exampleInputFile">
							</div>
                                </div>
                                  <div class="col-md-12">
                                     <div class="form-group col-md-8">
								  <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>

									
                                
								</div>
                                </div>
                                                              </form>

               </div>

				
		
				<hr style="height:1px;border:none;color:#333;background-color:#333;"/>
			  <!-- /END THE FEATURETTES -->
		
			  <!-- FOOTER -->
			  <footer>
				
<p style="font-size:14px; color:#000">Black Ivy Magazine &copy; 2016. All Rights Reserved | Designed by Dachi Solutions . </p>			  </footer>
			</div>
        </div>
    </div>
	


    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-3.3.6/docs/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.6/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
