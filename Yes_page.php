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
					<a class="active" href="Yes_page.php">Video Annotation</a>
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

<div id="body">
		<div class="image"><a href="index.html"><img src="images/hk_main.png" width="974" height="614" class="transparent" alt=""> </a>

<ul>
<h2><font color="white"><li>THANK YOU FOR YOUR TIME !!! HERE IS WHAT YOU NEED TO DO !</li></h2>
</ul>

<h3>
<ul>
  <li><font color="white">In the next few pages, you will be shown a video  of 1 - 1.5 minutes duration</li>
  <li><font color="white">Please watch the video and then answer the questions which will appear below the video </li>
  <li><font color="white">Please make sure that you answer the question according to the video</li>
</ul>
<p>Key Terms you will be needing in annotating the videos</p>
<ul>
  <li><font color="white">Giveaway: A giveaway is another term for a turnover. This is when the offensive player with the puck gets hit or makes a play (usually a pass) that causes their team to lose possession of the puck</li>
  <li><font color="white">Takeaway: A takeaway occurs when pressure from the defending team results in a defending player gaining possession of the puck </li>
  <li><font color="white">Blocked Shots:  A shot on goal that is being stopped by the goalkeeper for a save</li>
  <li><font color="white">Missed Shots: A widely deflected shot on the goal post </li>
</ul>
</h3>

<div style="text-align:center;">
<form action="video_1.php">
    <input type="submit" value="I Understood! Let's get started" />
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
