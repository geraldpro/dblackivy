<?php
session_start();
if(empty($_SESSION['username'])){
	header('location:admin.php');
	exit;
	}
error_reporting(E_ALL);
include_once "dblackivy_connect.php";
$mdb = new connect;

$stmt=$mdb->mysqli->query('SELECT magid,magname,magphoto,magdate FROM magazine ORDER BY magid DESC',MYSQLI_USE_RESULT);
$count= 0;
while($data=$stmt->fetch_array(MYSQLI_ASSOC)){
	   $magid[] = $data['magid'];
	   $magname[] = $data['magname'];
	   $magphoto[] = $data['magphoto'];
	   $magdate[] = $data['magdate'];
	   $count++;
	  
	  
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
  <title>Manage-advert-photo-list -- Black Ivy</title>
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
						<li><a href="log-out.php">Sign Out</a></li>
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
			  <h1 class="page-header">Manage Magazine Photo List</h1>

				<div class="row placeholders" style="text-align:left;">
						<div class="col-md-12 ">
							<div class="col-md-12">
								<div class="row">
								  <div class="col-sm-12">
                                    
                                    <?php for($i=0; $i<$count; $i++){ ?>
										<div class="col-sm-4 col-md-3">
											<div class="thumbnail">
				<a href="#"> <?php echo "<img src=http://localhost/dblackivy/magazine_folder/".$magphoto[$i]."> <br>" ?></a>
												<div class="caption">
						       <small> <?php echo $magname[$i]; ?></small><br>
                        	 <small> <?php echo $magdate[$i]; ?></small><br>
						

	
<p style="text-align:center;"><a href="delete-magazine-photo.php?id=<?php echo $magid[$i];?>" class="label label-danger" type="button">Delete</a>
<a href="edit-magazine-photo.php?id=<?php echo $magid[$i];?>"class="label label-warning" type="button">Edit</a></p>
												</div>
											</div>
										</div>
                                        <?php }?>
										
										
							
									</div>
								</div>
							</div>
						</div>
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-3.3.6/docs/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.6/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
