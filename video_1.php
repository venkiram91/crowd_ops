<?php 

if (!isset($_SESSION)) {

session_start();



if(isset($_SESSION['email_id']))

{
require_once 'classes/Membership.php';
$membership = new Membership();
$response = $membership->get_video();
if($response==2)
{
	header("location:thanks.php");
}
if($_SESSION['round']==1)
{


?>
<html>



<style>

body {
    color: white;
    left: 100 px;;
    
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


echo '<iframe title="YouTube video player" class="youtube-player"  type="text/html" 
width="640" height="390" src='.$_SESSION['video_url'].'
frameborder="0" allowFullScreen align="right"></iframe>'
?>
</br>

<p2>FOLLOWING ARE YOUR QUESTIONS</p2>

<form action="answers.php" method="post">
<ul>
  <li>Who is playing the match?</li>
 <label>Team A  </label><select name="team_a">
    <option value="russia">Russia</option>
    <option value="usa">USA</option>
    <option value="canada">Canada</option>
    <option value="north_america">North America</option>
  </select>
  <label>Team B </label>
  <select name="team_b">
    <option value="north_america">North America</option>
    <option value="usa">USA</option>
    <option value="canada">Canada</option>
    <option value="russia">Russia</option>
  </select>
  <li>Number of goals? </li>
	<label>Team A Goals </label><input type="text" name="team_a_goals" /> 
<br>
	<label>Team B Goals </label><input type="text" name="team_b_goals" /> 
   <li>Which team won the match?</li>
	<select name="winning_team">
    <option value="team_a">Team A</option>
    <option value="team_b">Team B</option>
	</select>
    <li>How many blocked shots were there?</li>
	<label>Team A blocked_shots </label><input type="text" name="team_a_blocked" /> 
	<br>
	<label>Team B blocked_shots </label><input type="text" name="team_b_blocked" />
    <li>How many missed shots were happened? </li>
	<label>Team A missed_shots </label><input type="text" name="team_a_missed" /> 
	<br>
	<label>Team B missed_shots </label><input type="text" name="team_b_missed" />
   <li>How many give_aways?</li>
	<label>Team A give_away </label><input type="text" name="team_a_give_away" />
	<br> 
	<label>Team B give_away </label><input type="text" name="team_b_give_away" />
	<li>How many take_aways?</li>
	<label>Team A take_away </label><input type="text" name="team_a_take_away" /> 
	<br>
	<label>Team B take_away </label><input type="text" name="team_b_take_away" />
	<li>Which players scored goals?</li>
	<label>Team A players </label><input type="text" name="team_a_players" /> 
	<br>
	<label>Team B players </label><input type="text" name="team_b_players" />

</ul>
<input type="submit" value="submit answers" />
</form>
<div style="text-align:center;">
<form action="video_2.html">
    <input type="submit" value="Go to next video" />
</form>

</body>

</html>


<?php
}
else
{
?>	
<html>
<style>

body {
    color: white;
    left: 100 px;;
    
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
			<img src="images/logo_canada.png" alt=""width="144" height="134" align="left"/>	
					


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


echo '<iframe title="YouTube video player" class="youtube-player" type="text/html" 
width="640" height="390" src='.$_SESSION['video_url'].'
frameborder="0" allowFullScreen align="right" ></iframe>'
?>
</br>

<p2>Round 2 FOLLOWING ARE YOUR QUESTIONS</p2>


    
	<?php
	$question_id=1;
	$video_id=$_SESSION['video_id'];
	$response = $membership->get_answers($question_id,$video_id);
	
	?>




<div style="text-align:center;">
<form action="video_2.html">
    <input type="submit" value="Go to next video" />
</form>

</body>
</html>

<?php
}
}

else 

{

header("location:index.php");
}
}
?>
