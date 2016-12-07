<!DOCTYPE html>
<?php

if (!isset($_SESSION)) {
session_start();
if(isset($_SESSION['email_id']))
{
?>

<html>
<body>
<head>
	<title>Hockey Annotation</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<!--[if IE 7]>
		<link href="css/ie7.css" rel="stylesheet" type="text/css">

	<![endif]-->
</head>
<body>
	<div id="header">
		
			<div id ="content">
				<img src="images/logo_canada.png" alt=""width="144" height="134 align="left"/>	
						



						<ul class="navigation">
				<li>
					<a class="active" href="home.php">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="Yes_page.php">Video Annotation</a>
				</li>
				
				<li>
					<a href="blog.html">Blog</a>
				</li>
				<li>
					<a href="get_answers.php">ANNOTATED VIDEOS</a>
				</li>
				<li>
					<a href="signout.php">SIGN OUT</a>
				</li>
			</ul>
		</div>
	</div>

<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<div style="text-align:center;">
    <img src="image.png">
</div>
<br>

	<div id="body">
		<div id="featured"> <a href="index.html"><img src="images/hk_main.png" width="974" height="614" alt=""> </a>
					</div>

					<div id="body">
<img src="images/logos/calg_flames.png" style="position: absolute; top: 250px; left: 50px"; height="150" width="200">
</div>

<div id="body">
<img src="images/logos/detroit.png" style="position: absolute; top: 420px; left: 50px"; height="150" width="200">
</div>

<div id="body">
<img src="images/logos/mont_logo.png" style="position: absolute; top: 600px; left: 50px"; height="150" width="200">
</div>

<div id="body">
<img src="images/logos/Phoenix.png" style="position: absolute; top: 250px; left: 1280px"; height="150" width="200">
</div>

<div id="body">
<img src="images/logos/new_jers.png" style="position: absolute; top: 420px; left: 1280px"; height="150" width="200">
</div>

<div id="body">
<img src="images/logos/was_cap.png" style="position: absolute; top: 600px; left: 1280px"; height="150" width="200">
</div>
</div>
	<div id="footer">
		<div>
			<div class="section">
				<div>
					<div>
						<ul>
							<li class="first">
								<h2>Blog</h2>
								<p>
									An unique way of Video Annotation ! <a href="blog.html" class="readmore"></a>
								</p>
							</li>
							<li>
								<h2>get in touch</h2>
								<ul class="connect">
									<li>
										<a href="http://www.freewebsitetemplates.com/go/facebook/" class="facebook">&nbsp;</a>
									</li>
									<li>
										<a href="http://www.freewebsitetemplates.com/go/twitter/" class="twitter">&nbsp;</a>
									</li>
									<li>
										<a href="http://www.freewebsitetemplates.com/misc/contact" class="googleplus">&nbsp;</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footnote">
				<p>
					&copy; Copyright 2012. All rights reserved.
				</p>
			</div>
		</div>
	</div>

<div class="wrap center"> <!-- Just to center ver and hor -->
  <div class="wrap-label">
     <label for="name">Your Name</label>
     <p class="iconicfill-pen-alt2"></p>
  </div>
  <input type="text" id="name" >
</div>



</body>


</html>

<?php
}
else 
{
header("location:index.php");
}
}
?>