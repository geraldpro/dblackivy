<?php
include_once "dblackivy_connect.php";
include_once "delete-posts.php";  
$mdb = new connect;
$stmt = $mdb->mysqli->query('SELECT postid,postcategory,postitle,postbody,postphoto,postdate FROM postnews ORDER BY postid DESC',MYSQLI_USE_RESULT);
$count= 0;
while($data=$stmt->fetch_array(MYSQLI_ASSOC)){
	   $dataid[] = $data['postid'];
	   $datacategory[] =$data['postcategory'];
	   $datatitle[] = $data['postitle'];
	   $dataphoto[] = $data['postphoto'];

	   $datadate[] = $data['postdate'];
	   $count++;
	}

   $datadate[] = date('j-M-Y');
   
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
  <title>Post List -- Black Ivy</title>
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
				<div class="row" style="padding-top:20px;">              
				<h3 class="page-header"> Manage Post Lists</h3>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="col-lg-8 col-md-8 col-sm-8">
							<div class="row" style="margin-bottom:0px;">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		                          <?php for($i=0; $i<$count;$i++){?>

                                    <div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
										  <h4 class="panel-title">
											  <div class="media">
												  <div class="media-left">
                                    
										<div class="col-sm-4 col-md-2">
											<div class="thumbnail" style="text-align:center;">
<a href="#"><?php echo "<img src=http://localhost/dblackivy/post_images/".$dataphoto[$i]."> <br>"; ?></a>		 
          

											</div>
										</div>
										
										
										
										
									
                                    
                                    
												  <div class="media-body">
													<span class="pull-right"><a href="delete-posts.php?id=<?php echo $dataid[$i];?>" class="label label-danger" type="button">Delete</a></span>
													<span class="pull-right"><a href="file:///C|/xampp/htdocs/hgnps/edit-news.html" class="label label-info" type="button"><a href="edit-posts.php?id=<?php echo $dataid[$i] ; ?>" class="label label-info" type="button">Edit</a></span>
													<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				<h4 class="media-heading" style="margin-bottom:0px; font-weight: bold;font-size:14px;"><?php echo strtoupper($datatitle[$i]);?></h4>
													</a>
  <small class="text-muted"><span class="text-primary">Post Category:</span> <span><?php echo $datacategory[$i]; ?></span></small></br>                                                  
		<small class="text-muted"><span class="text-primary">Date Created:</span> <span><?php echo $datadate[$i]; ?></span></small></br>
												  </div>
												</div>
											</h4>
										</div>
										
									</div>
                                            <?php }?>
									
								</div>
							</div>
							<!-- Paging -->
							<nav>
							  <ul class="pager">
								<li><a href="#">Previous</a></li>
								<ul class="pagination pagination-sm">
									<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
								</ul>
								<li><a href="#">Next</a></li>
							  </ul>
							</nav>
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
