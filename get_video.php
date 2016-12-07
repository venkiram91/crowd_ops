<?php
require_once 'classes/Membership.php';
$membership = new Membership();

if(!empty($_POST['mail']) && !empty($_POST['pass']) )
{

$mail=strip_tags($_POST['mail']);

$pass=strip_tags($_POST['pass']);


$response = $membership->validate_User($mail, $pass);



if($response==1)
{
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php">';
// exit; 
  

}


}
else
{
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
// exit;  
}
?>