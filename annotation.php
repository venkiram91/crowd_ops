<?php 

if (!isset($_SESSION)) {

session_start();

}

if(isset($_SESSION['email_id']))

{
	
require_once 'classes/Membership.php';
$membership = new Membership();
$video_id = $_GET['id'];
$response = $membership->get_video_annotation($video_id);



if($response==1)
{
#echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php">';

  

}




}

else 

{

header("location:home.php");

}

?>