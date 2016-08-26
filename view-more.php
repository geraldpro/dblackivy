<?php
error_reporting(E_ALL);
include_once "dblackivy_connect.php";
$mdb = new connect;

//selects featured article posts
$stmt = $mdb->mysqli->query('SELECT postid,postcategory,postitle,postbody,postphoto FROM postnews WHERE postid = $id', MYSQLI_USE_RESULT);
while($data=$stmt->fetch_array(MYSQLI_ASSOC)){
	   $dataid = $data['postid'];
	   $datacategory = $data['postcategory'];
	   $datatitle = $data['postitle'];
	   $datacontent = $data['postbody'];
	   $dataphoto = $data['postphoto'];
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
    <link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet">
   <link href="dblackivy.css" rel="stylesheet">
   
   </style>
    
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

            <li><a href="decor.php"><span style="color:#FFF;">DECOR</span></a></li>
                 <li><a href="health.php"><span style="color:#FFF;">HEALTH</span></a></li>
                 <li><a href="inspirational.php"><span style="color:#FFF;">INSPIRATIONAL</span></a></li>
                 <li><a href="boldlife.php"><span style="color:#FFF;">BOLD LIFE STYLE</span></a></li>
                 <li><a href="fashion.php"><span style="color:#FFF;">FASHION</span></a></li>
                 <li><a href="blackmodel.php"><span style="color:#FFF;">BLACK MODELS</span></a></li>

                 <li><a href="http://dblackivy.blogspot.com.ng/"><span style="color:#FFF;">BLOG</span></a></li>
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
		<div class="col-sm-8 blog-main" id="link1">
        <div class="caption">
        <h4 style="margin-top:-10px;"><a href="#"><?php  if(isset($_GET['id'])){echo strtoupper($datatitle); }?></a></h4>        
        
        </div>
                <div class="thumbnail">

      <a href="#"><?php if(isset($_GET['id'])){echo "<img src=http://localhost/dblackivy/post_images/".$dataphoto."> <br>"; }?></a>
            </div>
			  <div class="row" style="padding-top:20px;">
			   <p><?php if(isset($_GET['id'])){echo  $datacontent ;}?></p>

			    
			    
			    
			    </div>
				
				
			  
		  </div>
            
			<div class="col-sm-4 col-md-4" style="margin-bottom:-20px;">
        <div class="thumbnail">
		<a href="#"> <?php echo "<img src=http://localhost/dblackivy/magazine_folder/".$magphoto."> <br>" ?></a>
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
         <a href="#"> <?php echo "<img src=http://localhost/dblackivy/advert_images/".$advertphoto[$i]."> <br>" ?></a>
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
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"><a href="#">HOME</a></p></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"><a href="about.php">ABOUT</a></p></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"><a href="construction.php">ADVERTISE</a></p></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px; margin-right:10px;"><a href="contact-us.php">CONTACT</a></p></li>
 <li role="presentation"><p style="font-size:12px; color:#fff"> Black Ivy Magazine &copy; 2016. All Rights Reserved | Designed by Dachi Solutions . </p>
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
