<?php
error_reporting(E_ALL);
session_start();
include_once "user_login.php";

$user=new user();
 
if(isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];	
extract($_POST);

//Checks if all the fields are completed
 if($username!=''&& $password!=''){
	
 
 //checks if username and password matches that in the database
	
	$usercheck=$username;$usercheck1=$password; 
	$check = $user->mysqli->prepare("SELECT username,password FROM admin WHERE username=? AND password=?");
	$check->bind_param('ss',$usercheck,$password);
	$check->execute();
	$check->store_result();
	$check->bind_result($username,$password);
	if($check->num_rows >0){
	
	//creates session name for the user
     $_SESSION['username'] = $_POST['username'];    
     header('location:create-news.php');	
	}else{header('location:admin.php?msg=1');
	
	}
	
	}else  
		
	      die('You did not complete all of the required field');
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
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact-us.php">CONTACT</a></li>
            </ul>
          
          
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->


    

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <div class="row">
          <div class="tab-content">
              <div class="tab-pane active" id="register">
                  <form class="form-signin" action="" method="post" enctype="multipart/form-data">
                    <h2   class="form-signin-heading text-center">Black Ivy Admin Login</h2>
                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required >
           <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                            <span class="text-danger"><?php if(isset($_GET['msg'])){echo $error_msg[$msg];}  ?></span>

                    <p class="text-center"  style="margin-top:10px;">
					<button type="submit" name="login" value="login" class="btn btn-primary">Login</button>

			<a href="#forgotpassword" class="btn btn-danger btn-md"  role="button" data-toggle="tab">Forgot Password</a>
					</p>
                    
                    
                  </form>
              </div>
              
              <div class="tab-pane" id="forgotpassword">
                  <form class="form-signin">
                    <h2 class="form-signin-heading">Get your password</h2>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                    <p class="text-center" style="padding-top:20px;">
						<a class="btn btn-md btn-primary" type="submit">Get Password</a>
						<a href="#register" class="btn btn-danger btn-md" role="button" data-toggle="tab">Login</a>
					</p>
                  </form>
              </div>
            </div>
         </div><!-- /.row -->         
      </div>



    
    
      <div id="footer" style="margin-top:30px;">
<div class="container">
       <div class="row">

                            <hr style="height:1px;border:none;color:#333;background-color:#333;"/>
       
      <p style="font-size:14px; text-align:center; color:#000" id="style">Black Ivy Magazine &copy; 2016. All Rights Reserved | Designed by Dachi Solutions . </p>
       
       
       
       </div>
         </div>
          </div>           



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script>window.jQuery || document.write('<script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.6/docs/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.6/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="offcanvas.js"></script>
  </body>
</html>
