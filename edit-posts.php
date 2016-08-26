<?php
session_start();
if(empty($_SESSION['username'])){
	header('location:admin.php');
	exit;
	}
error_reporting(E_ALL);
include_once "dblackivy_connect.php";
$mdb = new connect;
if(isset($_POST['submit'])){
	$_POST = array_map('stripslashes',$_POST );
	extract ($_POST);
	$error='';



if(isset($_FILES['uploadedfile'])){
  if(is_uploaded_file($_FILES['uploadedfile']['tmp_name'])){
  $img_dir = $_SERVER['DOCUMENT_ROOT']."/dblackivy/post_images/" ;
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
		 
	if(move_uploaded_file($tmp_name,$img_dir.$_FILES['uploadedfile']['name'])){
            
	 if (empty($postitle )||empty($postbody)){
$error='Please update the fields';}else{
$stmt=$mdb->mysqli->prepare("UPDATE postnews SET postcategory=?,postitle=?,postbody=?,postphoto=? WHERE postid= ?");
$stmt-> bind_param('ssssd',$postcategory,$postitle,$postbody,$postphoto,$postid);
if($stmt->execute()===TRUE){
header("location:post-list.php");
exit;
}else {
	$error='Error Saving, try again';
		}
}

           } 
		 
	 }
   }








	
	
	
	}
if(isset($_GET['id'])){
$id = trim($_GET['id']);
if(is_numeric($id)){
$stmt=$mdb->mysqli->query("SELECT postid,postcategory,postitle,postbody,postphoto FROM postnews WHERE postid = $id",MYSQLI_USE_RESULT);
while($data=$stmt->fetch_array(MYSQLI_ASSOC)){
	   $dataid = $data['postid'];
	   $datacategory = $data['postcategory'];
	   $datatitle = $data['postitle'];
	   $datacontent = $data['postbody'];
	   $dataphoto = $data['postphoto'];
	   }
}else die('id is not a number');
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
  <title>Create Post Items -- Black Ivy</title>
  <!-- Bootstrap core CSS -->
  <link href="bootstrap-3.3.6/docs/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="bootstrap-3.3.6/docs/examples/dashboard/dashboard.css" rel="stylesheet">
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
  <script src="bootstrap-3.3.6/docs/assets/js/ie-emulation-modes-warning.js"></script>
  <script language="javascript" type="text/javascript" src="http://localhost/hgnps/tinymce/tinymce.min.js"></script>
<script language="javascript" type="text/javascript">
  tinyMCE.init({
    selector:"textarea",
    theme:"modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});

</script>
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
            <li><a href="#">HOME</a></li>
            <li><a href="construction.php">ABOUT</a></li>
            <li><a href="construction.php">ADVERTISE</a></li>
            <li><a href="construction.php">CONTACT</a></li>
            </ul>
          
          <ul class="nav navbar-nav navbar-right" id="style">
					<li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ADMIN MANAGEMENT<span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li class="dropdown-header"><span class="h5">Account & Settings</span></li>
						<li><a href="edit-profile.php">Change Password</a></li>
						<li><a href="index.html">Log Out</a></li>
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
				<li><a href="manage-model-photo.php">Manage Model Photo List</a></li>
                <li><a href="add-advert-photo.php">Add Advert Photo</a></li>
                <li><a href="manage-advert-photo.php">Manage Advert Photo List</a></li>


			  </ul>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Create New Post</h1>
				<div class="row placeholders" style="text-align:left;">
					<form role="form" method="post" action="" enctype="multipart/form-data">
                      <input name="postid" type="hidden" value="<?php echo $dataid ; ?>">

						<div class="col-md-12 " style="font-size:14px">
                        <div class="col-md-12 ">
								<div class="form-group col-md-8">
<div class="form-group">
  <label for="sel1">Choose Post Category:</label>
  <select name="postcategory" value"<?php if(isset($_GET['id'])){ echo $datacategory; }?>" class="form-control" id="sel1">
    <option><?php if(isset($_GET['id'])){ echo $datacategory; }?></option>
    <option>Decoration</option>
    <option>Fashion</option>
    <option>Health</option>
    <option>Bold Life Style</option>
    <option>Black Models</option>

  </select>
</div>								</div>
							</div>
  <div class="col-md-12 ">
	<div class="form-group col-md-8">
	  <label for="Postitle">Post Title</label>
<input type="text" name="postitle" value="<?php if(isset($_GET['id'])){ echo $datatitle; }   ?>" class="form-control" placeholder="Post Title">
								</div>
							</div>
							<div class="col-md-12 ">
								<div class="form-group col-md-8">
								<label for="newsbody">Post Body</label>
<textarea name="postbody"  class="form-control" rows="10" placeholder="News Body"><?php if(isset($_GET['id'])){echo $datacontent;}?></textarea>
								</div>
							</div>
                            <div class="col-sm-12">
										<div class="col-sm-4 col-md-2">
											<div class="thumbnail" style="text-align:center;">
<a href="#"><?php if(isset($_GET['id'])){echo "<img src=http://localhost/dblackivy/post_images/".$dataphoto."> <br>";} ?></a>		 
          

											</div>
										</div>
										
										
										
										
										
									</div>
							<div class="col-md-12">
								<div class="form-group col-md-8">
						     <label for="exampleInputFile">Choose A New Post Photo</label>
                               <input type="file" name="uploadedfile" class="btn btn-sm btn-success" id="exampleInputFile" value="<?php if(isset($_GET['id'])){ echo $dataphoto; } ?>">
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
    <script src="bootstrap-3.3.6/docs/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.6/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
