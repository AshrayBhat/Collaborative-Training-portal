<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>login and registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container">
		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit clearfix">
 <div class="pull-left span5">
  <h1>Training Portal</h1>
  <p>A quick and comprehensive approach</p>
 </div>
 <div class="pull-right">
  <form class="well" action="login_success.php" method="post" >
   <legend>Log In</legend>
   <label>E-mail</label>
   <input type="text" name="Email" class="span3" placeholder="Type your E-mail">
   <label>Password</label>
   <input type="password" name="Password" class="span3" placeholder="Type your password">
   <label><button type="submit" class="btn btn-success">Log in</button></label>
  </form>
 </div>

<div class="pull-left">
  <form id=signup class="well" method="post" action="registration_success.php">
   <legend>Sign Up</legend>
   <label>Name</label>
   <input type="text" name="name"class="span3" placeholder="Type your username">
   <label>USN</label>
   <input type="text" name="USN" class="span3" placeholder="Type your USN">
   <label>Branch</label>
   <input type="text" name="Branch" class="span3" placeholder="Type your Branch">
   <label>Email</label>
   <input type="text" name="Email" class="span3" placeholder="Type your Email">
   <label>Password</label>
   <input type="password" name="Password" class="span3" placeholder="Type your password">
   <label>Confirm Password</label>
   <input type="password" name="Confirmpassword" class="span3" placeholder="Re-Type your password">
   </label>
   <div>
   <button type="submit" class="btn btn-success">create my account</button>
   </div>
  </form>
 </div>
 

</div>
//<body>  
<div class="container">  
<ul class="thumbnails">  
        <li class="span5">  
          <div class="thumbnail">  
            <img src="download.jpg" alt="Aptitude">  
            <div class="caption">  
              <h5>Aptitude</h5>  
              <p>This is a good site to test your aptitude skills.Click Enter to enter the site.</p>  
              <p><a href="#" class="btn btn-success">Enter</a></p>  
            </div>  
          </div>  
        </li>  
        <li class="span5">  
          <div class="thumbnail">  
            <img src="interview.jpg" alt="Interview">  
            <div class="caption">  
              <h5>Interview</h5>  
              <p>This site gives you a detailed information on how to prepare for an interview.Click enter to view the site</p>  
              <p><a href="#" class="btn btn-success">Enter</a></p>  
            </div>  
          </div>  
        </li>  
      </ul>
	
		<footer>
			<p>&copy; Company 2012</p>
		</footer>
	</div> <!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>

<script src="http://twitter.github.com/bootstrap/assets/js/jquery.js"></script>
<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-button.js"></script>
	<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
	  <script type="text/javascript">
	  $(document).ready(function(){
			
			$("#signup").validate({
				rules:{
					name:"required",
					usn:"required",
					branch:"required",
					email:{
							required:true,
							email: true
						},
					password:{
						required:true,
						minlength: 8
					},
					confirmpasswd:{
						required:true,
						equalTo: "#passwd"
					},
					
				},
				
				errorClass: "help-inline"
				
			});
		});
	  </script>
</body>
</html>