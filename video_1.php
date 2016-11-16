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

<body>

<h1>HERE IS THE FIRST VIDEO !!!</h1>


<?php


echo '<iframe title="YouTube video player" class="youtube-player" type="text/html" 
width="640" height="390" src='.$_SESSION['video_url'].'
frameborder="0" allowFullScreen></iframe>'
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
	<label>Team B Goals </label><input type="text" name="team_b_goals" /> 
   <li>Which team won the match?</li>
	<select name="winning_team">
    <option value="team_a">Team A</option>
    <option value="team_b">Team B</option>
	</select>
    <li>How many blocked shots were there?</li>
	<label>Team A blocked_shots </label><input type="text" name="team_a_blocked" /> 
	<label>Team B blocked_shots </label><input type="text" name="team_b_blocked" />
    <li>How many missed shots were happened? </li>
	<label>Team A missed_shots </label><input type="text" name="team_a_missed" /> 
	<label>Team B missed_shots </label><input type="text" name="team_b_missed" />
   <li>How many give_aways?</li>
	<label>Team A give_away </label><input type="text" name="team_a_give_away" /> 
	<label>Team B give_away </label><input type="text" name="team_b_give_away" />
	<li>How many take_aways?</li>
	<label>Team A take_away </label><input type="text" name="team_a_take_away" /> 
	<label>Team B take_away </label><input type="text" name="team_b_take_away" />
	<li>Which players scored goals?</li>
	<label>Team A players </label><input type="text" name="team_a_players" /> 
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

<body>

<h1>HERE IS THE FIRST VIDEO !!!</h1>


<?php


echo '<iframe title="YouTube video player" class="youtube-player" type="text/html" 
width="640" height="390" src='.$_SESSION['video_url'].'
frameborder="0" allowFullScreen></iframe>'
?>
</br>

<p2>Round 2 FOLLOWING ARE YOUR QUESTIONS</p2>

<form action="answers.php" method="post">
<ul>
    <li>Who is playing the match?</li>
    <li>Number of goals? </li>
    <li>Which team won the match?</li>
    <li>How many blocked shots were there?</li>
    <li>How many missed shots were happened? </li>
    <li>How many give_aways?</li>
	<li>How many take_aways?</li>
	<li>Which players scored goals?</li>


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
}

else 

{

header("location:index.php");

}
}
?>