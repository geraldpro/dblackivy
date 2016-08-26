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
    <link rel="icon" href="file:///C|/Users/favicon.ico">

    <title>Black Ivy Magazine</title>

    <!-- Bootstrap core CSS -->
    <link href="file:///C|/Users/Ikenna chioke/Downloads/bootstrap-3.3.6/docs/dist/css/bootstrap.min.css" rel="stylesheet">
     
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <link href="file:///C|/Users/Ikenna chioke/Downloads/bootstrap-3.3.6/docs/examples/carousel/carousel.css" rel="stylesheet">
    <link href="file:///C|/Users/Ikenna chioke/Downloads/font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet">
   <link href="file:///C|/Users/Ikenna chioke/Downloads/dblackivy.css" rel="stylesheet">
   
   </style>
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="file:///C|/Users/Ikenna chioke/Downloads/bootstrap-3.3.6/docs/assets/js/ie-emulation-modes-warning.js"></script>

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
           <li><a href="file:///C|/Users/Ikenna chioke/Downloads/index.php"><span style="color:#FFF;">HOME</span></a></li>

            <li><a href="file:///C|/Users/Ikenna chioke/Downloads/decor.php"><span style="color:#FFF;">DECOR</span></a></li>
                 <li><a href="file:///C|/Users/Ikenna chioke/Downloads/health.php"><span style="color:#FFF;">HEALTH</span></a></li>
                 <li><a href="file:///C|/Users/Ikenna chioke/Downloads/inspirational.php"><span style="color:#FFF;">INSPIRATIONAL</span></a></li>
                 <li><a href="file:///C|/Users/Ikenna chioke/Downloads/boldlife.php"><span style="color:#FFF;">BOLD LIFE STYLE</span></a></li>
                 <li><a href="file:///C|/Users/Ikenna chioke/Downloads/fashion.php"><span style="color:#FFF;">FASHION</span></a></li>
                 <li><a href="file:///C|/Users/Ikenna chioke/Downloads/blackmodel.php"><span style="color:#FFF;">BLACK MODELS</span></a></li>

                 <li><a href="http://dblackivy.blogspot.com.ng/"><span style="color:#FFF;">BLOG</span></a></li>
            </ul>
          
          <ul class="nav navbar-nav navbar-right" id="style">
           <li><a href="file:///C|/Users/Ikenna chioke/Downloads/construction.php"><span style="color:#DAA520;"><strong>ADVERTISE</strong></span></a></li>
            
       
            </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>
	<div class="container-fluid">
		<div class="container" style="margin-top:70px;">
        <p class="text-center"><a href="#"><img src="file:///C|/Users/Ikenna chioke/Downloads/dblackivy_img/db.fw.png" alt="Black Ivy"></a></p> 
                     <hr style="height:3px;border:none;color:#333;background-color:#333;"/>
        
		<div class="row">
			<div class="col-sm-8 blog-main" id="link1">
                <div class="thumbnail">

           <a href="#"> <?php echo "<img src=http://dblackivy.com/banner_images/".$bannerphoto."> <br>" ?></a>
            </div>
			  <div class="row" style="padding-top:20px;">
			    
			    
			    
			    
			    
			    </div>
				
				
			  <div class="row">
			    <?php // displays latest posts by 3 counts	?>	
       <?php  for($i=0;$i<$count1;$i++){?>
                    
                  <div class="col-sm-6 col-md-4">
                  <h2 class="blog-title" id="style" style="margin-bottom:20px;">RECENT POSTS</b></h2>

    <div class="thumbnail">
      <a href="#"><?php echo "<img src=http://dblackivy.com/post_images/".$dataphoto[$i]."> <br>"; ?></a>
      <div class="caption text-center">
 <p style="color:#DAA520; margin-bottom:15px; font-size:12px;"><strong><?php echo strtoupper($datacategory[$i]); ?></strong></p>
 <h4 style="margin-top:-10px;"><a href="file:///C|/Users/Ikenna chioke/Downloads/read-more.php?id=<?php echo $dataid[$i] ;?>"><?php echo strtoupper($datatitle[$i]);?></a></h4>          <p><?php echo substr($datacontent[$i],0,60);?></p>
        
      </div>
    </div>
  </div>
  
    <?php }?>
			  </div>
		  </div>
            
			<div class="col-sm-4 col-md-4" style="margin-bottom:-20px;">
        <div class="thumbnail">
		<a href="#"> <?php echo "<img src=http://dblackivy.com/magazine_folder/".$magphoto."> <br>" ?></a>
          	</div>
            </div>

<div class="col-sm-4 col-md-4" style="margin-bottom:40px;">
        <div class="thumbnail">
       <a href="#"><?php echo "<img src=http://dblackivy.com/model_images/".$modelphoto."> <br>" ?></a>
          	</div>
            </div>	

      
            
            <div class="col-sm-12" id="link1">
<h2 class="blog-title" id="style" style="margin-bottom:20px; text-align:center;">FEATURED POSTS</b></h2>
            <div class="row">
            
          <?php // displays all posts by 6 counts	?>	

        <?php for($i=0;$i<$count4;$i++){?>
    
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="#"><?php echo "<img src=http://dblackivy.com/post_images/".$dataphoto[$i]."> <br>"; ?></a>
      <div class="caption text-center">
 <p style="color:#DAA520; margin-bottom:15px; font-size:12px;"><strong><?php echo strtoupper($datacategory[$i]); ?></strong></p>        <h4 style="margin-top:-10px;"><a href="file:///C|/Users/Ikenna chioke/Downloads/read-more.php?id=<?php echo $dataid[$i] ;?>"><?php echo strtoupper($datatitle[$i]);?></a></h4>        
        <p><?php echo substr($datacontent[$i],0,60);?>....</p>
        
      </div>
    </div>
  </div>
      <?php }?>

  
  
  
  <div class="clearfix"></div>
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
                 
                            <hr style="height:1px;border:none;color:#333;background-color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif"/>
                            <div id="wrap">
       <ul class="nav nav-pills" id="link">
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"><a href="#">HOME</a></p></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"><a href="file:///C|/Users/Ikenna chioke/Downloads/about.php">ABOUT</a></p></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px;"><a href="file:///C|/Users/Ikenna chioke/Downloads/construction.php">ADVERTISE</a></p></li>
       <li role="presentation"><p style="font-size:12px; color:#fff; margin-left:7px; margin-right:10px;"><a href="file:///C|/Users/Ikenna chioke/Downloads/contact-us.php">CONTACT</a></p></li>
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





            <li><a href="#"><img src="file:///C|/Users/Ikenna chioke/Downloads/dblackivy_img/Facebook.fw.png" alt="facebook" height="25" width="25"></a></li>
            <li><a href="#"><img src="file:///C|/Users/Ikenna chioke/Downloads/dblackivy_img/twtitter.png" alt="twtitter" height="28" width="28"></a></li>
            <li><a href="#"><img src="file:///C|/Users/Ikenna chioke/Downloads/dblackivy_img/instagram.png" alt="Instagram" height="28" width="28"></a></li>
       </ul>
        </div>
    

       
       </div>
       </div>
       
       </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="file:///C|/Users/Ikenna chioke/Downloads/bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
    <script src="file:///C|/Users/Ikenna chioke/Downloads/bootstrap-3.3.6/docs/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="file:///C|/Users/Ikenna chioke/Downloads/bootstrap-3.3.6/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>