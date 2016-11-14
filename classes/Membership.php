<?php

require 'Mysql.php';

class Membership {



      
	function validate_user($mail, $pass) {
		$mysql = New Mysql();
		$ensure_credentials = $mysql->verify_Username_and_Pass($mail, $pass);
		
		if($ensure_credentials==1)
		{
		return 1;
		}
		
	} 
	
	function insert_answers($team_a, $team_b,$team_a_goals,$team_b_goals,$winning_team,$team_a_blocked,$team_b_blocked,$team_a_missed,$team_b_missed,$team_a_give_away,$team_b_give_away,$team_a_take_away,$team_b_take_away,$team_a_players,$team_b_players) {
		$mysql = New Mysql();
		$ensure_credentials = $mysql->insert_answers($team_a, $team_b,$team_a_goals,$team_b_goals,$winning_team,$team_a_blocked,$team_b_blocked,$team_a_missed,$team_b_missed,$team_a_give_away,$team_b_give_away,$team_a_take_away,$team_b_take_away,$team_a_players,$team_b_players);
		
		if($ensure_credentials==1)
		{
		return 1;
		}
		
	} 
	function get_video() {
		$mysql = New Mysql();
		$ensure_credentials = $mysql->get_video();
		
		return $ensure_credentials;

		
		
	} 
	
	
}
