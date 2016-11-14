<?php
require_once 'classes/Membership.php';
$membership = new Membership();
if (!isset($_SESSION)) {

session_start();
}

if(!empty($_POST['team_a']) && !empty($_POST['team_b']) && !empty($_POST['team_a_goals']) && !empty($_POST['team_b_goals']) &&!empty($_POST['winning_team']) && !empty($_POST['team_a_blocked']) && !empty($_POST['team_b_blocked']) && !empty($_POST['team_a_missed'])&& !empty($_POST['team_b_missed'])&& !empty($_POST['team_a_give_away'])&& !empty($_POST['team_b_give_away'])&& !empty($_POST['team_a_take_away'])&& !empty($_POST['team_b_take_away'])&& !empty($_POST['team_a_players'])&& !empty($_POST['team_b_players']) )
{

$team_a=strip_tags($_POST['team_a']);

$team_b=strip_tags($_POST['team_b']);

$team_a_goals=strip_tags($_POST['team_a_goals']);

$team_b_goals=strip_tags($_POST['team_b_goals']);

$team_a_blocked=strip_tags($_POST['team_a_blocked']);

$team_b_blocked=strip_tags($_POST['team_b_blocked']);

$team_a_missed=strip_tags($_POST['team_a_missed']);

$team_b_missed=strip_tags($_POST['team_b_missed']);

$team_a_give_away=strip_tags($_POST['team_a_give_away']);

$team_b_give_away=strip_tags($_POST['team_b_give_away']);

$team_a_take_away=strip_tags($_POST['team_a_take_away']);

$team_b_take_away=strip_tags($_POST['team_b_take_away']);

$team_a_players=strip_tags($_POST['team_a_players']);

$team_b_players=strip_tags($_POST['team_b_players']);

$winning_team=strip_tags($_POST['winning_team']);

$response = $membership->insert_answers($team_a, $team_b,$team_a_goals,$team_b_goals,$winning_team,$team_a_blocked,$team_b_blocked,$team_a_missed,$team_b_missed,$team_a_give_away,$team_b_give_away,$team_a_take_away,$team_b_take_away,$team_a_players,$team_b_players);

if($response==1)
{
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=video_1.php">';
// exit; 
  

}


}
else
{
	#print 2;
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
// exit;  
}

?>