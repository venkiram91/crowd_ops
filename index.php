<?php 

if (!isset($_SESSION)) {

session_start();

}

if(isset($_SESSION['email_id']))

{

header("location:home.php");

}

else 

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
<style>
.container {
    position: relative;
}

.topright {
    position: absolute;
    top: 88px;
    right: 250px;
    font-size: 18px;
}

img { 
    width: 974;
    height: 500;

    position: relative;
    top: 125px;
    right: 40px;
    left:300;
    
}
</style>

<style>
h2 {
    position: absolute;
    left: 400px;
    top: 5px;
	font-family: Futura,Trebuchet MS,Arial,sans-serif; 
}
</style>


 	
<h2><font color="white" font size= 100% ><b> LET US  ANNOTATE SOME VIDEOS!!!</b></font></h2>

</head>



<body>
<div class= "container">
	
<div class="topright">
 	<form action="signin.php" method="post">
 	<font color="white"><b>Email ID</b></font>
	<input name="mail" type="text">
 	<font color="white"><b>PASSWORD:</b></font>
	<input name="pass" type="password">
	<input type="submit" align="left" class="greenButton" value="Sign In" />
</form>
</div>
	

<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
	<div class="img">
		<div id="featured"> <a href="index.html"><img src="images/hk_main.png" width="974" height="614" alt=""> </a>
					</div>
	</div>
	




<div id="footer">
		<div>
			<div class="section">
				<div>
					<div>
<div class="footnote">
				<p>
					&copy; Copyright 2012. All rights reserved.
				</p>
			</div>
		</div>
	</div>

<div class="wrap center"> <!-- Just to center ver and hor -->
  <div class="wrap-label">
     <p class="iconicfill-pen-alt2"></p>
  </div>
</div>

</form>
</body>
</html>
<?php
}

?>
