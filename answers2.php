<?php
require_once 'classes/Membership.php';
$membership = new Membership();
if (!isset($_SESSION)) {

session_start();
}

if(!empty($_POST['id']))
{

$response = $membership->insert_answers2($_POST['id']);
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