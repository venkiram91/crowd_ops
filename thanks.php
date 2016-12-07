<?php 

if (!isset($_SESSION)) {

session_start();



if(isset($_SESSION['email_id']))

{

?>
<html>


<body>

<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<head>
	<title>Blog - Sporting Good</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<!--[if IE 7]>
		<link href="css/ie7.css" rel="stylesheet" type="text/css">
	<![endif]-->

<style>
img.transparent {
    opacity: 0.4;
}
img.transparent:hover {
    opacity: 0.2; // no point in going higher than 1 here
}
</style>

<style>
h2 { 
   position: absolute; 
   top: 100px; 
   left: 100px; 
   width: 100%; 
}
</style>

<style>
h3 { 
   position: absolute; 
   top: 200px; 
   left: 100px; 
   width: 100%; 
}
</style>

 
</head>
<body>
	<div id="header">

		<div>
<div id ="content">
			<img src="images/logo_canada.png" alt=""width="144" height="134 align="left"/>
						<ul class="navigation">
				<li>
					<a href="home.php">Home</a>
				</li>
								<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a  href="Yes_page.php">Video Annotation</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
				<li>
					<a href="get_answers.php">ANNOTATED VIDEOS</a>
				</li>
				<li>
					<a class="active" href="signout.php">SIGN OUT</a>
				</li>
			</ul>
		</div>
	</div>

<div id="body">
		<div class="image"><a href="index.html"><img src="images/hk_main.png" width="974" height="614" class="transparent" alt=""> </a>

<ul>
<h2><font color="white">THANK YOU FOR YOUR TIME !!!</h2>
<br>
<br>
<h3><font color="white">ALL THE VIDEOS ARE ANNOTATED! YOU CAN TAKE SOME REST NOW :) !!</h3>
</ul>
</form>
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