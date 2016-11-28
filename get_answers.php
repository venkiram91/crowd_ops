<?php 

if (!isset($_SESSION)) {

session_start();

}

if(isset($_SESSION['email_id']))

{
?>
<html>
<style>

body {
    color: white;
    left: 100 px;
    
}
</style>
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
<?php	
require_once 'classes/Membership.php';
$membership = new Membership();
$response = $membership->get_video_result();

?>
</body>
</html>
<?php

}

else 

{

header("location:home.php");

}

?>