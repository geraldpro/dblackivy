<?php
error_reporting(E_ALL);
include_once "dblackivy_connect.php";
$mdb = new connect;

//selects featured article posts
$stmt = $mdb->mysqli->query('SELECT postid,postcategory,postitle,postbody,postphoto FROM postnews ORDER BY postid DESC LIMIT 6', MYSQLI_USE_RESULT);
$count4= 0;
while($data=$stmt->fetch_array(MYSQLI_ASSOC)){
	   $dataid[] = $data['postid'];
	   $datacategory[] = $data['postcategory'];
	   $datatitle[] = $data['postitle'];
	   $datacontent[] = $data['postbody'];
	   $dataphoto[] = $data['postphoto'];
	   $count4++;
	}

	
//Selects Model photo
$stmt=$mdb->mysqli->query('SELECT modelid,fname, mname, lname, address, phone, modelphoto FROM model ORDER BY modelid DESC LIMIT 1',MYSQLI_USE_RESULT);
$count2= 0;
while($data=$stmt->fetch_array(MYSQLI_ASSOC)){
	   $modelid = $data['modelid'];
	   $fname = $data['fname'];
	   $mname = $data['mname'];
	   $lname = $data['lname'];
	   $address = $data['address'];
	   $phone = $data['phone'];
	   $modelphoto = $data['modelphoto'];
	   $count2++;
	  
	  
	}
	//selects magazine photo
$stmt=$mdb->mysqli->query('SELECT magid,magname,magphoto,magdate FROM magazine ORDER BY magid DESC LIMIT 1',MYSQLI_USE_RESULT);
$count3= 0;
while($data=$stmt->fetch_array(MYSQLI_ASSOC)){
	   $magid = $data['magid'];
	   $magname = $data['magname'];
	   $magphoto = $data['magphoto'];
	   $magdate = $data['magdate'];
	   $count3++;
	  
	  
	}
	
//selects banner photo
$stmt=$mdb->mysqli->query('SELECT bannerid,bannername,bannerphoto,bannerdate FROM banner ORDER BY bannerid DESC LIMIT 1',MYSQLI_USE_RESULT);
$count6= 0;
while($data=$stmt->fetch_array(MYSQLI_ASSOC)){
	   $bannerid = $data['bannerid'];
	   $bannername= $data['bannername'];
	   $bannerphoto = $data['bannerphoto'];
	   $bannerdate= $data['bannerdate'];
	   $count6++;
	  
	  
	}

	
	
//selects advert image posts
$stmt=$mdb->mysqli->query('SELECT advertid,advertname,advertphoto,advertdate FROM advert ORDER BY advertid DESC LIMIT 4',MYSQLI_USE_RESULT);
$count= 0;
while($data=$stmt->fetch_array(MYSQLI_ASSOC)){
	   $advertid[] = $data['advertid'];
	   $advertname[] = $data['advertname'];
	   $advertphoto[] = $data['advertphoto'];
	   $advertdate[] = $data['advertdate'];
	   $count++;
	  }

	
 
 
 
//selects latest article posts
$stmt = $mdb->mysqli->query('SELECT postid,postcategory,postitle,postbody,postphoto FROM postnews ORDER BY postid DESC LIMIT 3', MYSQLI_USE_RESULT);
$count1= 0;
while($data=$stmt->fetch_array(MYSQLI_ASSOC)){
	   $dataid[] = $data['postid'];
	   $datacategory[] = $data['postcategory'];
	   $datatitle[] = strtoupper($data['postitle']);
	   $datacontent[] = $data['postbody'];
	   $dataphoto[] = $data['postphoto'];
	   $count1++;
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

    <link href="bootstrap-3.3.6/docs/examples/carousel/carousel.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

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
        <div class="navbar-header" id="style">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left" id="style">
           <li><a href="index.php"><span style="color:#FFF;">HOME</span></a></li>

            <li><a href="construction.php"><span style="color:#FFF;">DECOR</span></a></li>
                 <li><a href="construction.php"><span style="color:#FFF;">HEALTH</span></a></li>
                 <li><a href="construction.php"><span style="color:#FFF;">INSPIRATIONAL</span></a></li>
                 <li><a href="construction.php"><span style="color:#FFF;">BOLD LIFE STYLE</span></a></li>
                 <li><a href="construction.php"><span style="color:#FFF;">FASHION</span></a></li>
                 <li><a href="construction.php"><span style="color:#FFF;">BLACK MODELS</span></a></li>

                 <li><a href="construction.php"><span style="color:#FFF;">BLOG</span></a></li>
            </ul>
          
          <ul class="nav navbar-nav navbar-right" id="style">
           <li><a href="construction.php"><span style="color:#DAA520;"><strong>ADVERTISE</strong></span></a></li>
            
           <li><a href="admin.php"><span style="color:#FFF;"><strong>SIGN IN</strong></span></a></li>
            </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>
	<div class="container-fluid">
		<div class="container" style="margin-top:70px;">
        <p class="text-center"><a href="#"><img src="dblackivy_img/db.fw.png" alt="Black Ivy"></a></p> 
                     <hr style="height:3px;border:none;color:#333;background-color:#333;"/>
        
		<div class="row">
			<div class="col-sm-8 blog-main" style="margin-bottom:20px;">
            <div class="thumbnail">

           <a href="#"> <?php echo "<img src=http://dblackivy.com/banner_images/".$bannerphoto."> <br>" ?></a>
            </div>
			  <div class="row" style="padding-top:20px;">
			    
			    
			    
			    
			    
		      </div>
				
    			
				
		  </div>
            <div class="col-sm-4 blog-sidebar" style="margin-bottom:40px;">
        <div class="thumbnail">
		<a href="#"> <?php echo "<img src=http://dblackivy.com/magazine_folder/".$magphoto."> <br>" ?></a>
          	</div>
            </div>
         <div class="col-sm-8" id="link1" style="font-size:16px; margin-top:-30px;">
          <div class="blog-header">
					<h4 class="blog-title" style="margin-bottom:0px;"><b>A FEW WORDS ABOUT US</b></h4>
					<p>The world is changing all around us to continue to thrive in the world of Bold Life Style. We must look ahead understanding the trends and forces that shape our world of living in the future and moving swiftly will prepar us all for what is to come in the world. These are the declarations of our overall mission and goals and the values that guide us. As a magazine and as individuals.</p>
             
             <p><strong> Our Mission: </strong> To refresh the world's mind on livingbodysoul and spirit.<br>To inspire moments of optimism and hapiness through the world of living. <br>To create value and make a difference in the world of environments and life style.</p>
             
             <p><strong>Our Vision: </strong><br>To people - inspiring each other to the best we can be by identifying best spots and places in the world where interior and exterior decor are located.<br>Portfolio - Offering the world a portfolio of interior decor that anticipate and satisfy people's desires and needs.<br>Parners - Nurturing a winning networks of partners and building mutual loyalty.<br>Planet - being a responsible global citizen that makes a difference in the world of interior and exterior decor. <br>Productivity - being highly effective learn and fast moving magazine </p>
             
             <p><strong>Our Values: </strong> Leadership - Courage to shape a better future.<br>Integrity - being real<br>Passion - Committed in heart and mind. <br>Diversity - As inclusive as our magazine.<br>Quality -what we do we do well.</p>
        

				</div>
         
         </div>

            
          <div class="row">
           <div class="col-sm-12">
             
             
<div class="col-sm-12">
    <div class="list-group">
	<span class="list-group-item">
	   <h3><strong>Meet Our Team</strong></h3>
						  </span>
						</div>
					</div>





<div class="col-sm-4 col-md-3">
 <div class="thumbnail" style="text-align:center;">
   <a href="#"><img src="dblackivy_img/DSC_7371 (1).JPG" alt="image"></a>
	<div class="caption center">
		<h4><strong>Offomah Adaugo</strong></h4>
                         <p><b style="color:#DAA520;">Editor-in-chief</b></p>
							</div>
						</div>
					</div>

<div class="col-sm-4 col-md-3">
 <div class="thumbnail">
	<a href="#"><img src="dblackivy_img/DSC_7321.JPG" alt="image"></a>
		<div class="caption" style="text-align:center;">
			<h4><strong>Omodo kingsley</strong></h4>
                            <p><b style="color:#DAA520;">Senior Editor/ Writer</b></p>
							</div>
						</div>
					</div>


<div class="col-sm-4 col-md-3">
	<div class="thumbnail">
		<a href="#"><img src="dblackivy_img/DSC_7369.JPG" alt="image"></a>
			<div class="caption" style="text-align:center;">
			  <h4><strong>Agbo Toochukwu</strong></h4>
                            <p><b style="color:#DAA520;">Article Editor</b></p>
							</div>
						</div>
					</div>

<div class="col-sm-4 col-md-3">
	<div class="thumbnail">
	  <a href="#"><img src="dblackivy_img/DSC_7326.JPG" alt="image"></a>
	    <div class="caption" style="text-align:center;">
		<h4><strong>Nnoyelum Josephine</strong></h4>
                            <p><b style="color:#DAA520;">Article Editor</b></p>
							</div>
						</div>
					</div>


             </div>
            
            </div>
			

            
            
            
          
		</div>
	</div>


      <!-- /END THE FEATURETTES --> 
    
    
    
</div>
<div class="container-fluid" style="background-color:#F7F7F7;">
<div class="col-sm-12" style="margin-top:30px;" >

<?php // displays advert images by 4 counts	?>	

  <?php for($i=0;$i<$count;$i++){?>
      <div class="col-sm-4 col-md-3" style="margin-bottom:40px;">
        <div class="thumbnail">
         <a href="#"> <?php echo "<img src=http://dblackivy.com/advert_images/".$advertphoto[$i]."> <br>" ?></a>
          	</div>
            </div>
            
            
            
    <?php }?>

</div>
            </div>
<div id="foot">
<div class="container">
       <div class="row">
                 
                            <hr style="height:1px;border:none;color:#333;background-color:#333;"/>
                            <div id="wrap">
       <ul class="nav nav-pills" id="link">
       <li role="presentation"><p id="link" style="font-size:12px; color:#fff; margin-left:7px;"><a href="#">HOME</a></p></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"><a href="about.php">ABOUT</a></p></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"><a href="construction.php">ADVERTISE</a></p></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px; margin-right:10px;"><a href="contact-us.php">CONTACT</a></p></li>
       &nbsp;&nbsp;&nbsp;<li role="presentation"><p style="font-size:12px; color:#fff"> Black Ivy Magazine &copy; 2016. All Rights Reserved | Designed by Dachi Solutions . </p>
       </li>
       </ul>
       
       <ul id="style">
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
              <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
              <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
              <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
              <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"></li>





            <li><a href="#"><img src="dblackivy_img/Facebook.fw.png" alt="facebook" height="25" width="25"></a></li>
            <li><a href="#"><img src="dblackivy_img/twtitter.png" alt="twtitter" height="28" width="28"></a></li>
            <li><a href="#"><img src="dblackivy_img/instagram.png" alt="Instagram" height="28" width="28"></a></li>
       </ul>
        </div>
    

       
       </div>
       </div>
       
       </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
    <script src="bootstrap-3.3.6/docs/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.6/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
