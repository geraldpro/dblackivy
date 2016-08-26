<?php
session_start();
if(empty($_SESSION['username'])){
	header('location:admin.php');
	exit;
	}
include_once "dblackivy_connect.php";
include_once "Add-headlines.class.php";
if(isset($_POST['submit'])){
   $_POST = array_map('stripslashes',$_POST );
   extract ($_POST);


define ('SITE_ROOT', realpath(dirname(__FILE__)));

$mdb = new connect;
   $newsdata=new newsdata;
	$postid=""; 
	$postdate= date("Y-m-d");
	$postphoto="";
	
if(isset($_FILES['uploadedfile'])){
  if(is_uploaded_file($_FILES['uploadedfile']['tmp_name'])){
  $img_dir = '/home/dblackiv/public_html/post_images/';
  $tmp_name = $_FILES['uploadedfile']['tmp_name'];
  $postphoto = $_FILES['uploadedfile']['name'];
  $file_size = $_FILES['uploadedfile']['size']; 
  $file_type = $_FILES['uploadedfile']['type']; 
   $extension=array('jpeg','png','gif','jpg');
       $file_ext = explode('.',$_FILES['uploadedfile']['name']);
	   $file_ext = end($file_ext); 
	   if(in_array($file_ext,$extension)===false){
	   $errors[]= "extensions not allowed, please choose a JPEG or PNG files";
		 }
		 if($_FILES['uploadedfile']['size'] > 1048576){
			$errors[]='file size must be exactly 1 MB';
			 }
		 
		if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $img_dir.$_FILES['uploadedfile']['name'])){
      
        $newsdata->insertpost($postcategory,$postitle,$postbody,$postphoto,$postdate);
        
		} else{echo "sorry,there was a problem uploading your file.";}

           	 

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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Black Ivy Magazine</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.6/docs/dist/css/bootstrap.min.css" rel="stylesheet">
     
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap-3.3.6/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  
    <!-- Custom styles for this template -->
    <link href="bootstrap-3.3.6/docs/examples/signin/signin.css" rel="stylesheet">

    
    <link href="dblackivy.css" rel="stylesheet">
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
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
            <li><a href="file:///C|/Users/Ikenna chioke/Downloads/index.php">HOME</a></li>
            <li><a href="file:///C|/Users/Ikenna chioke/Downloads/about.php">ABOUT</a></li>
            <li><a href="file:///C|/Users/Ikenna chioke/Downloads/contact-us.php">CONTACT</a></li>
            </ul>
          
          <ul class="nav navbar-nav navbar-right" id="style">
					<li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ADMIN MANAGEMENT<span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li class="dropdown-header"><span class="h5">Account & Settings</span></li>
						<li><a href="file:///C|/Users/Ikenna chioke/Downloads/edit-profile.php">Change Password</a></li>
						<li><a href="file:///C|/Users/Ikenna chioke/Downloads/log-out.php">Log Out</a></li>
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
				<li><a href="file:///C|/Users/Ikenna chioke/Downloads/create-news.php">Create New Post</a></li>
				<li><a href="file:///C|/Users/Ikenna chioke/Downloads/post-list.php">Manage Post List</a></li>
				<li><a href="file:///C|/Users/Ikenna chioke/Downloads/Add-Model-Photo.php">Add Model Photo </a></li>
				<li><a href="file:///C|/Users/Ikenna chioke/Downloads/manage-model-photo-list.php">Manage Model Photo List</a></li>
                <li><a href="file:///C|/Users/Ikenna chioke/Downloads/add-advert-photo.php">Add Advert Photo</a></li>
                <li><a href="file:///C|/Users/Ikenna chioke/Downloads/manage-advert-photo-list.php">Manage Advert Photo List</a></li>
                <li><a href="file:///C|/Users/Ikenna chioke/Downloads/add-magazine-photo.php">Add Magazine Photo</a></li>
                <li><a href="file:///C|/Users/Ikenna chioke/Downloads/manage-mag-photo-list.php">Manage Magazine Photo List</a></li>
                <li><a href="file:///C|/Users/Ikenna chioke/Downloads/add-banner-photo.php">Add Banner Photo</a></li>
                <li><a href="file:///C|/Users/Ikenna chioke/Downloads/manage-banner-photo-list.php">Manage Banner Photo List</a></li>
			  </ul>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Create New Post</h1>
				<div class="row placeholders" style="text-align:left;">
					<form role="form" method="post" action="" enctype="multipart/form-data">
						<div class="col-md-12 " style="font-size:14px">
                        <div class="col-md-12 ">
								<div class="form-group col-md-8">
<div class="form-group">
  <label for="sel1">Choose Post Category:</label>
  <select name="postcategory" value"<?php if(isset($error)){echo $_POST['postcategory'];}?>" class="form-control" id="sel1">
    <option>-Select Post Category-</option>
    <option>Decoration</option>
    <option>Fashion</option>
    <option>Health</option>
    <option>Bold Life Style</option>
    <option>Black Models</option>
    <option>Inspirational</option>

  </select>
</div>								</div>
							</div>
  <div class="col-md-12 ">
	<div class="form-group col-md-8">
	  <label for="Postitle">Post Title</label>
<input type="text" name="postitle" value="<?php if(isset($error)){echo $_POST['postitle'];}?>" class="form-control" placeholder="Post Title">
								</div>
							</div>
							<div class="col-md-12 ">
								<div class="form-group col-md-8">
								<label for="newsbody">Post Body</label>
<textarea name="postbody"  class="form-control" rows="10" placeholder="News Body"><?php if(isset($error)){echo $_POST['postbody'];}?></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group col-md-8">
						     <label for="exampleInputFile">Choose Post Photo</label>
                               <input type="file" name="uploadedfile" class="btn btn-sm btn-success" id="uploadedfile">
								</div>
                                <div class="col-md-12">
								  <button type="reset" class="btn btn-danger">Reset</button>
					       <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
								</div>
                                </div>
								
								
							</div>
                            					</form>

						</div>
                    <hr style="height:1px;border:none;color:#333;background-color:#333;"/>
			  <!-- /END THE FEATURETTES -->
		
			  <!-- FOOTER -->
			  <footer>
				<p class="pull-right"><a href="#">Back to top</a></p>
<p style="font-size:14px; color:#000">Black Ivy Magazine &copy; 2016. All Rights Reserved | Designed by Dachi Solutions . </p>			  </footer>
			</div>
        </div>
    </div>
	


    </div>
				</div>
             

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="file:///C|/Users/Ikenna chioke/Downloads/bootstrap-3.3.6/docs/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="file:///C|/Users/Ikenna chioke/Downloads/bootstrap-3.3.6/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>