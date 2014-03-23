<!DOCTYPE html>
<html lang="en">

<head>
	<style>
	 .carousel .item {
    width: 100%; /*slider width*/
    max-height: 600px; /*slider height*/
}
.carousel .item img {
    width: 100%; /*img width*/
}
/*add some makeup*/
.carousel .carousel-control {
    background: none;
    border: none;
    top: 50%;
}
/*full width container*/
@media (max-width: 767px) {
    .block {
        margin-left: -20px;
        margin-right: -20px;
    }
}
	</style>
	<meta charset="utf-8">
	<title>Training Portal</title>
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
	<meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="Metro UI CSS">
    <meta name="author" content="Sergey Pimenov">
    <meta name="keywords" content="windows 8, modern style, Metro UI, style, modern, css, framework">

    <link href="metroui/public/css/modern.css" rel="stylesheet">
    <link href="metroui/public/css/modern-responsive.css" rel="stylesheet">
    <link href="metroui/public/css/site.css" rel="stylesheet" type="text/css">
    <link href="metroui/public/js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="metroui/public/js/assets/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="metroui/public/js/assets/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="metroui/public/js/assets/moment.js"></script>
    <script type="text/javascript" src="metroui/public/js/assets/moment_langs.js"></script>

    <script type="text/javascript" src="metroui/public/js/modern/dropdown.js"></script>
    <script type="text/javascript" src="metroui/public/js/modern/accordion.js"></script>
    <script type="text/javascript" src="metroui/public/js/modern/buttonset.js"></script>
    <script type="text/javascript" src="metroui/public/js/modern/carousel.js"></script>
    <script type="text/javascript" src="metroui/public/js/modern/input-control.js"></script>
    <script type="text/javascript" src="metroui/public/js/modern/pagecontrol.js"></script>
    <script type="text/javascript" src="metroui/public/js/modern/rating.js"></script>
    <script type="text/javascript" src="metroui/public/js/modern/slider.js"></script>
    <script type="text/javascript" src="metroui/public/js/modern/tile-slider.js"></script>
    <script type="text/javascript" src="metroui/public/js/modern/tile-drag.js"></script>
    <script type="text/javascript" src="metroui/public/js/modern/calendar.js"></script>


	<script type="text/javascript">window.history.forward();function noBack(){window.history.forward();}</script>
	
</head>
<body class = "metrouicss"onload="noBack();prettyprint();" onpageshow="if (event.persisted) noBack();" onunload="">
<div id="header-text">
  <h1><strong id="top-title" align="center">Training Portal</strong></h1>
    <p id="slogan" align="left">Be a quick Learner</p>
</div>  
    <div class="navbar navbar-inverse">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="nav-collapse" id=menu>
					<ul class="nav">
                                                
						<li><a href="member_view.html">Home</a></li>
                        <li><a href="readnotes.php">Read</a></li>
                        <li class="active"><a href="process_upload_notes.php">Add Notes</a></li>
						<li><a href="contactus.html">contact us</a></li>
   
                                        </ul>
					<ul class="nav pull-right">
						<p><a href="logout.php" class="btn btn-success">log out</a></p> 
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
<div class="hero-unit clearfix">
	<div class="page">
	<h>BRANCH</h>
	<?php
	$con=mysqli_connect("localhost","root","ashr1y","coppr");
	if (mysqli_connect_errno())
	{
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$sql = "SELECT branch FROM branch";
	$result = mysqli_query($con,$sql);
	?>
	<form></form>
	<select  id ="branch" name='branch'>
	<?php
	$a="";
	while($row = mysqli_fetch_object($result))
  	{
	echo"<option  value='".$row->branch."'>'".$row->branch."'</option>";
	$a+="<option  value='".$row->branch."'>'".$row->branch."'</option>";
  	}
	if (!mysqli_query($con,$sql))
  	{
  	die('Error: ' . mysqli_error($con));
  	}
	?></select >  

<script type="text/javascript"> 
$("#branch").change(function() {
	//var branch = document.getElementById('branch').value;
	var branch =$("#branch").val();
	//console.log(branch);
	$.ajax({
		url:"select_sub.php",
		method :"GET",
		data : {branch_sel:branch},
 
		success : function(data){console.log(data);$("#subject").html(data)}
		 });
       
    	});
      
</script> 

<p>SUBJECT</p>
<select  id ="subject" name='subject'></select >



<script type="text/javascript"> 
$("#subject").change(function() {
	var subject =$("#subject").val()
	$.ajax({
		url:"select_topic.php",
		method :"GET",
		data : {sub_sel:subject},
		success : function(data) {console.log(data);$("#topic").html(data)}
	});
});
</script>
<p>TOPIC</p>
<select  id ="topic" name='topic'></select >




<h3>Type The key points</h3>
<form method="POST" action='add_notes_1.php'>
	<input type="hidden" name="topic" class="topic-input"/>
<textarea class="FormElement" name="word" id="term" style="width: 500px; height: 200px;"></textarea>
<div>
<input type="submit" class="btn btn-success"></button>
</div allign ="right">
 </form>

<script type="text/javascript">
$('.FormElement').ready(function() {$('.FormElement').prop('disabled',true);});
</script>

<script type="text/javascript"> 
$("#topic").change(function() {
	var topic =$("#topic").val();
	$(".topic-input").val(topic);
	// $.ajax({
	// 	url:"add_notes_1.php",
	// 	method :"GET",
	// 	data : {topic_sel:topic,simething:something},
	// 	success : function(data) {console.log(data);$("#note").html(data)}
	$('.FormElement').prop('disabled',false);
	});
</script>

</body>
</html>